<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Game;
use App\Models\Tag;
use App\Http\Requests\StoreArticleForm;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * ポリシー追加
     */
    public function __construct()
    {
        $this->authorizeResource(Article::class, 'article');
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     * 検索機能
     * テーブル結合後、imageカラムが重複するためselect以下はその対策
     */
    public function index(Request $request)
    {
        $query = Article::query();
        
        $search = $request->input('search');
        
        if($search !== null){
            $query->join('games','articles.game_id','=','games.id')->select('articles.*');
            //全角スペースを半角に
            $search_split = mb_convert_kana($search,'s');
            //空白で区切る
            $search_split2 = preg_split('/[\s]+/', $search_split,-1,PREG_SPLIT_NO_EMPTY);
            //単語をループで回す
            foreach($search_split2 as $value) {
                $query->where('title','like','%'.$value.'%')
                      ->orWhere('body','like','%'.$value.'%')
                      ->orWhere('name','like','%'.$value.'%');
            }
        };

        $query->orderBy('articles.created_at', 'desc');
        $articles = $query->paginate(50);
        
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 登録ゲームをドロップダウンリストに加えるためにゲーム情報を返す。
     * タグの自動保管のためタグ情報を返す。
     */
    public function create()
    {
        $games = Game::all();

        $allTagNames = Tag::all()->map(function ($tag) {
            return ['text' => $tag->name];
        });

        return view('articles.create', compact('games', 'allTagNames'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * ローカル開発環境での投稿画像はS3に保存せず、articlesテーブルのimageカラムにhashnameを追加。
     * 本番環境では投稿画像をS3に保存し、同カラムにS3へのパスを追加する。
     * 縦562px以上の画像はInterventionImageによって縦幅アスペクト比維持の自動サイズへリサイズし格納する。
     */
    public function store(StoreArticleForm $request, Article $article)
    {
        $post = $request->all();

        $imagefile = $request->file('image');

        $now = date_format(Carbon::now(), 'YmdHis');
        $name = $imagefile->getClientOriginalName();
        $storeName = $now . "_" . $name;

        $image = Image::make($imagefile)->heighten(562, function ($constraint) {
            $constraint->upsize();
        });

        if (app('env') == 'production') {
            Storage::disk('s3')->put($storeName, (string) $image->encode(), 'public');
            $data = ['title' => $post['title'], 'body' => $post['body'], 'game_id' => $post['game_id'], 'image' => Storage::disk('s3')->url($storeName)];
        } else {
            Storage::disk('public')->put($storeName, (string) $image->encode());
            $data = ['title' => $post['title'], 'body' => $post['body'], 'game_id' => $post['game_id'], 'image' => $storeName];
        }

        $article->user_id = $request->user()->id;
        $article->fill($data)->save();

        // タグの登録と判定
        $request->tags->each(function ($tagName) use ($article) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $article->tags()->attach($tag);
        });

        return redirect('/')->with('flash_message', '投稿が完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $games = Game::all();

        $tagNames = $article->tags->map(function ($tag) {
            return ['text' => $tag->name];
        });

        $allTagNames = Tag::all()->map(function ($tag) {
            return ['text' => $tag->name];
        });

        return view('articles.edit', compact('article', 'games', 'tagNames', 'allTagNames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticleForm $request, Article $article)
    {
        $post = $request->all();

        $imagefile = $request->file('image');

        $now = date_format(Carbon::now(), 'YmdHis');
        $name = $imagefile->getClientOriginalName();
        $storeName = $now . "_" . $name;

        $image = Image::make($imagefile)->heighten(562, function ($constraint) {
            $constraint->upsize();
        });

        if (app('env') == 'production') {
            Storage::disk('s3')->put($storeName, (string) $image->encode(), 'public');
            $data = ['title' => $post['title'], 'body' => $post['body'], 'game_id' => $post['game_id'], 'image' => Storage::disk('s3')->url($storeName)];
        } else {
            Storage::disk('public')->put($storeName, (string) $image->encode());
            $data = ['title' => $post['title'], 'body' => $post['body'], 'game_id' => $post['game_id'], 'image' => $storeName];
        }

        $article->fill($data)->save();

        $article->tags()->detach();
        $request->tags->each(function ($tagName) use ($article) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $article->tags()->attach($tag);
        });

        return redirect('/')->with('flash_message', '更新が完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/')->with('flash_message', '削除が完了しました');
    }

    public function like(Request $request, Article $article)
    {
        $article->likes()->detach($request->user()->id);
        $article->likes()->attach($request->user()->id);

        return [
            'id' => $article->id,
            'countLikes' => $article->count_likes,
        ];
    }

    public function unlike(Request $request, Article $article)
    {
        $article->likes()->detach($request->user()->id);

        return [
            'id' => $article->id,
            'countLikes' => $article->count_likes,
        ];
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function preCreate($id)
    {
        $check = Game::find($id);

        $allTagNames = Tag::all()->map(function ($tag) {
            return ['text' => $tag->name];
        });

        return view('articles.create', compact('check', 'allTagNames'));
    }
}

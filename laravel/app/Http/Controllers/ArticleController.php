<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreArticleForm;
use Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(6);

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * ローカル開発環境での投稿画像はS3に保存せず、articlesテーブルのimageカラムにhashnameを追加。
     * 本番環境では投稿画像をS3に保存し、同カラムにS3へのパスを追加する。
     * 
     */
    public function store(StoreArticleForm $request)
    {
        $post = $request->all();
        
        if ($request->hasFile('image')) {
            if(app('env') == 'production') {
                $path = Storage::disk('s3')->putFile('/',$post['image'],'public');
                $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body'], 'image' => Storage::disk('s3')->url($path)];
            } else {
                $request->file('image')->store('/public/images');
                $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body'], 'image' => $request->file('image')->hashName()];
            }
        } else {
            $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body']];
        }

        Article::insert($data);

        return redirect('/')->with('flash_message', '投稿が完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;
use Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // サイドバー用のカテゴリ情報をソートし取得
        $categories = Category::orderBy('name', 'asc')->get();

        // 各検索キーの取得
        $category_id = $request->input('id');
        $moneyCheckKey = $request->input('money');
        $yearCheckKey = $request->input('year');
        $sort_key = $request->input('sort_key');

        // カテゴリー検索
        if (!empty($category_id)) {
            $games = Game::where('category_id', $category_id)->get();
        }

        // 価格帯検索
        if (!empty($moneyCheckKey)) {
            switch (true) {
                case $moneyCheckKey == 'low':
                    $games = Game::where('price', '<', 1000)->get();
                    break;
                case $moneyCheckKey == 'middle-low':
                    $games = Game::where('price', '>=', 1000)->where('price', '<', 2000)->get();
                    break;
                case $moneyCheckKey == 'middle-high':
                    $games = Game::where('price', '>=', 2000)->where('price', '<', 3000)->get();
                    break;
                case $moneyCheckKey == 'high':
                    $games = Game::where('price', '>=', 3000)->get();
                    break;
            }
        }

        // 配信年検索
        if (!empty($yearCheckKey)) {
            $games = Game::whereYear('released_date', $yearCheckKey)->get();
        }

        // フィルタ機能
        if (!empty($sort_key)) {
            switch ($sort_key) {
                case 'released_date_key1':
                    $games = Game::orderBy('released_date', 'desc')->get();
                    break;
                case 'released_date_key2':
                    $games = Game::orderBy('released_date', 'asc')->get();
                    break;
                case 'price_key1':
                    $games = Game::orderBy('price', 'asc')->get();
                    break;
                case 'price_key2':
                    $games = Game::orderBy('price', 'desc')->get();
                    break;
            }
        }

        // 検索されていなければ$gamesは宣言されていないため
        if (!isset($games)) {
            $games = Game::all();
        }

        return view('games.index', compact('games', 'categories'))->with('sort_key', $sort_key);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.games.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->all();

        $game = new Game();
        
        if ($request->hasFile('image')) {
            if(app('env') == 'production') {
                $path = Storage::disk('s3')->putFile('/',$post['image'],'public');
                $data = ['name' => $post['name'],
                         'data' => $post['data'],
                         'image' => Storage::disk('s3')->url($path),
                         'url' => $post['url'],
                         'price' => $post['price'],
                         'category_id' => $post['category_id'],
                         'released_date' => $post['released_date'],
                        ];
            } else {
                $request->file('image')->store('public');
                $data = ['name' => $post['name'],
                         'data' => $post['data'],
                         'image' => $request->file('image')->hashName(),
                         'url' => $post['url'],
                         'price' => $post['price'],
                         'category_id' => $post['category_id'],
                         'released_date' => $post['released_date'],
                        ];
            }
        }

        $game->fill($data)->save();

        return redirect('/admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        
        return view('games.show', compact('game'));
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

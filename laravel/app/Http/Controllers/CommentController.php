<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $post = $request->all();
        $data = ['user_id' => \Auth::id(), 'article_id' => $post['article_id'], 'body' => $post['body']];
        Comment::insert($data);

        $article = Article::find($post['article_id']);
        return redirect()->route('articles.show', compact('article'));
    }
}

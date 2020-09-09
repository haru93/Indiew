<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Comment $comment)
    {
        $post = $request->all();
        $data = ['article_id' => $post['article_id'], 'body' => $post['body']];

        $comment->user_id = Auth::id();
        
        $comment->fill($data)->save();

        $article = Article::find($post['article_id']);
        return redirect()->route('articles.show', compact('article'));
    }
}

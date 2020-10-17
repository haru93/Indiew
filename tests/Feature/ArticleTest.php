<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use App\Models\Game;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 未ログイン時(null)はいいねができない仕様であるか（falseが返されるか）テスト
     */
    public function testIsLikedByNull()
    {
        // category_gameテーブルのレコードを登録
        $category = factory(Category::class)->create();
        $game = factory(Game::class)->create();
        $game->categories()->attach($category);

        $article = factory(Article::class)->create();
        $result = $article->isLikedBy(null);

        $this->assertFalse($result);
    }

    /**
     * 記事をいいねしているUserモデルのインスタンスを引数として渡したとき、trueが返るかテスト
     */
    public function testIsLikedByTheUser()
    {
        // category_gameテーブルのレコードを登録
        $category = factory(Category::class)->create();
        $game = factory(Game::class)->create();
        $game->categories()->attach($category);
        
        $article = factory(Article::class)->create();
        $user = factory(User::class)->create();
        // likesテーブルのレコードに新規登録
        $article->likes()->attach($user);

        $result = $article->isLikedBy($user);

        $this->assertTrue($result);
    }

    /**
     * 記事をいいねしていないUserモデルのインスタンスを引数として渡した時、falseが返るかテスト
     */
    public function testIsLikedByAnother()
    {
        // category_gameテーブルのレコードを登録
        $category = factory(Category::class)->create();
        $game = factory(Game::class)->create();
        $game->categories()->attach($category);
        
        $article = factory(Article::class)->create();
        $user = factory(User::class)->create();
        $another = factory(User::class)->create();
        // 自分ではない他人が記事に「いいね」をする
        $article->likes()->attach($another);

        $result = $article->isLikedBy($user);

        $this->assertFalse($result);
    }
}

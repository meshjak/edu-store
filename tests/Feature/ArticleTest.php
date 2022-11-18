<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_index_of_article()
    {
        Article::factory()
            ->for(User::factory())
            ->count(15)
            ->create();

        $route = route('admin.articles.index');
        $response = $this->getJson($route)->getOriginalContent();
        $this->assertEquals(10, $response->count());
    }

    public function test_store_article()
    {
        $article = Article::factory()->for(User::factory())->make();
        $route = route('admin.articles.store');
        $this->getJson($route, $article)->assertOk();
    }

    public function test_show_article()
    {
        Article::factory()->for(User::factory())->create();
        $route = route('admin.articles.store');
        $this->getJson($route)->assertOk()->getOriginalContent();
    }

    public function test_update_article()
    {
        $article = Article::factory()->for(User::factory())->create();
        $route = route('admin.articles.update', $article->id);
        $this->patchJson($route, ['title' => "hi"])->assertOk();
    }

    public function test_destroy_article()
    {
        $article = Article::factory()->for(User::factory())->create();
        $route = route('admin.articles.destroy', $article->id);
        $this->deleteJson($route)->assertOk();
    }
}

<?php

namespace Tests\Unit;

use App\Http\Controllers\Admin\ArticleController;
use App\Models\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_list_of_paginated_article()
    {
//        $controller = new ArticleController();
        Article::factory()->count(20);
//        $res = $controller->index();
//        dd($res);
//        $this->assertTrue(count($res) == 10);
    }
}

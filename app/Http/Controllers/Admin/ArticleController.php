<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::latest()->paginate(10);
    }

    public function show(Article $article)
    {
        return response()->json(['data' => $article]);
    }

    public function store(SaveArticleRequest $request)
    {
        $article = Article::create($request->all());

        return response()->json([
            'data' => $article,
        ]);
    }

    public function update(Article $article, SaveArticleRequest $request)
    {
        $article->update($request->all());

        return response()->json([
            'data' => $this->show($article),
        ]);
    }

    public function destroy(Article $article)
    {
        return Article::destroy($article->id);
    }
}

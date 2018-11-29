<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use LaravelDay\Article\UseCase\ListArticle\ListArticles;

class ListArticlesController extends Controller
{
    public function __invoke()
    {
        // return Article::find(...); <- non lo faccio, altrimenti per fare i test avrei bisogno del DB fin da subito.
        $listArticles = new ListArticles();

        return response()->json($listArticles());
    }
}

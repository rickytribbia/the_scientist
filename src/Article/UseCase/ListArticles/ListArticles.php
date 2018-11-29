<?php
/**
 * Created by PhpStorm.
 * User: riccardotribbia
 * Date: 29/11/2018
 * Time: 15:06
 */

namespace LaravelDay\Article\UseCase\ListArticle;

class ListArticles
{

    public function __invoke()
    {
        return [
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00'
            ]
        ];
    }
}
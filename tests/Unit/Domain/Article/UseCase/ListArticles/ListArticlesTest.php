<?php

namespace Tests\Unit\Domain\Article\UseCase\ListArticles;

use LaravelDay\Article\UseCase\ListArticle\ListArticles;
use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * @test
     */
    public function shouldListArticles()
    {
        $handler = new ListArticles();
        $expectedData = [
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00'
            ]
        ];

        $data = $handler();

        $this->assertEquals($expectedData, $data);

    }
}

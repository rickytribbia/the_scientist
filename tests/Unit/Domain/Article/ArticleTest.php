<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article;

use LaravelDay\Article\Article;
use LaravelDay\Article\ValueObject\ArticleId;
use LaravelDay\Article\ValueObject\Body;
use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testExample()
    {
        $id = new ArticleId(1);
        $title = new Title('Articolo 1 che ha un titolo molto lungo');
        $body = new Body('Questo è un articolo');
        $creationDate = new \DateTimeImmutable();

        $article = new Article($id, $title, $body, $creationDate);

        $this->assertSame($id, $article->getId());
        $this->assertSame($title, $article->getTitle());
        $this->assertSame($body, $article->getBody());
        $this->assertSame($creationDate, $article->getCreationDate());
    }
}

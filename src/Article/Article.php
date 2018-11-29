<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: riccardotribbia
 * Date: 29/11/2018
 * Time: 15:17.
 */

namespace LaravelDay\Article;

use LaravelDay\Article\ValueObject\Title;

final class Article
{
    // final -> per impedire che qualcun altro estenda la nostra classe senza "permesso"

    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $body;
    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var int
     */
    private $id;

    // Mettere l'id nel costruttore COSTRINGE ad essere indipendenti dal framework, dal database e da altre dipendenze esterne
    // Per creare un articolo prima che sia messo in "persistenza" (database) mi serve quindi dargli un id.
    // E' utile ad esempio utilizzare un UUID come id.
    // E' provato a benchmark (fatto da quelli di MariaDB, fors'anche) che l'id UUID salvato come binario in un database è
    // molto più performante di un semplice id integer autoincrementale

    public function __construct(int $id, Title $title, string $body, \DateTimeImmutable $creationDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
    }

    public function getTitle(): Title
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}

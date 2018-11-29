<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: riccardotribbia
 * Date: 29/11/2018
 * Time: 16:50.
 */

namespace LaravelDay\Article\ValueObject;

class ArticleId
{
    /** @var string */
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return $this->id;
    }
}

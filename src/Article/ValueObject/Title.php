<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: riccardotribbia
 * Date: 29/11/2018
 * Time: 16:09.
 */

namespace LaravelDay\Article\ValueObject;

use LaravelDay\Article\ValueObject\Exception\TitleTooShort;

final class Title
{
    /**
     * @var string
     */
    private $title;

    public function __construct(string $title)
    {
        if (\mb_strlen($title) < 10) {
            throw new TitleTooShort();
        }
        $this->title = $title;
    }

    public function isEqual(self $title)
    {
        return (string) $title === (string) $this->title;
    }

    public function __toString()
    {
        return $this->title;
    }
}

<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: riccardotribbia
 * Date: 29/11/2018
 * Time: 16:46.
 */

namespace LaravelDay\Article\ValueObject;

use LaravelDay\Article\ValueObject\Exception\BodyTooLong;

class Body
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        if (\mb_strlen($text) > 200) {
            throw new BodyTooLong('Body too long');
        }
        $this->text = $text;
    }

    public function isEqual(self $body)
    {
        return (string) $body === (string) $this;
    }

    public function __toString()
    {
        return $this->text;
    }
}

<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article\ValueObject;

use Illuminate\Foundation\Testing\WithFaker;
use LaravelDay\Article\ValueObject\Body;
use LaravelDay\Article\ValueObject\Exception\BodyTooLong;
use Tests\TestCase;

class BodyTest extends TestCase
{
    use WithFaker;

    /**
     * @test
     */
    public function shouldCreateABody()
    {
        $bodyStr = $this->faker->words(10, true);
        $body = new Body($bodyStr);
        $this->assertSame($bodyStr, (string) $body);
    }

    /**
     * @test
     *
     * @throws BodyTooLong
     */
    public function shouldThrowBodyTooLongError()
    {
        $this->expectException(BodyTooLong::class);
        $bodyStr = $this->faker->words(2000, true);
        new Body($bodyStr);
    }
}

<?php

namespace Tests\Unit\Domain\Article\ValueObject;

use LaravelDay\Article\ValueObject\Exception\TitleTooShort;
use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TitleTest extends TestCase
{
    use WithFaker;

    /**
     * @test
     */
    public function shouldCreateATitle()
    {
        $titleStr = $this->faker->words(10, true);
        $title = new Title($titleStr);
        $this->assertSame($titleStr, (string)$title);
    }

    /**
     *
     * @test
     * @throws TitleTooShort
     */
    public function shouldThrowTitleTooLongError()
    {
        $this->expectException(TitleTooShort::class);
        $titleStr = $this->faker->words(1, true);
        $title = new Title($titleStr);
    }
}

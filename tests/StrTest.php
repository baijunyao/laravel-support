<?php

declare(strict_types=1);

namespace Baijunyao\LaravelSupport\Tests;

use Illuminate\Support\Str;

class StrTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Str::mixin(new \Baijunyao\LaravelSupport\Str());
    }

    public function testIsFalse()
    {
        static::assertTrue(Str::isFalse('false'));
        static::assertTrue(Str::isFalse(false));

        static::assertFalse(Str::isFalse(0));
    }

    public function testIsTrue()
    {
        static::assertTrue(Str::isTrue('true'));
        static::assertTrue(Str::isTrue(true));

        static::assertFalse(Str::isTrue(1));
    }
}

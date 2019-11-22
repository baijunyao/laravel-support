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

    public function testIsJsonArray()
    {
        static::assertTrue(Str::isJsonArray('[1]'));

        static::assertFalse(Str::isJsonArray('{"key":"value"}'));
        static::assertFalse(Str::isJsonArray('string'));
        static::assertFalse(Str::isJsonArray(1));
        static::assertFalse(Str::isJsonArray(true));
        static::assertFalse(Str::isJsonArray(false));
        static::assertFalse(Str::isJsonArray(null));
    }

    public function testJsJsonObject()
    {
        static::assertTrue(Str::isJsonObject('{"key":"value"}'));

        static::assertFalse(Str::isJsonObject('[1]'));
        static::assertFalse(Str::isJsonArray('string'));
        static::assertFalse(Str::isJsonArray(1));
        static::assertFalse(Str::isJsonArray(true));
        static::assertFalse(Str::isJsonArray(false));
        static::assertFalse(Str::isJsonArray(null));
    }

    public function testIsTrue()
    {
        static::assertTrue(Str::isTrue('true'));
        static::assertTrue(Str::isTrue(true));

        static::assertFalse(Str::isTrue(1));
    }
}

<?php

declare(strict_types=1);

namespace Baijunyao\LaravelSupport\Tests;

use Baijunyao\LaravelSupport\SupportServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [SupportServiceProvider::class];
    }
}

<?php

declare(strict_types=1);

namespace Baijunyao\LaravelSupport;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str as BaseStr;

class SupportServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        BaseStr::mixin(new Str());
    }
}

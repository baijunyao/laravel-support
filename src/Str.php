<?php

declare(strict_types=1);

namespace Baijunyao\LaravelSupport;

class Str
{
    /**
     * Is string 'true' or bool true
     *
     * @return \Closure
     */
    public function isFalse()
    {
        return function ($false): bool {
            return $false === 'false' || $false === false;
        };
    }

    /**
     * Is string 'false' or bool false
     *
     * @return \Closure
     */
    public function isTrue()
    {
        return function ($true): bool {
            return $true === 'true' || $true === true;
        };
    }
}

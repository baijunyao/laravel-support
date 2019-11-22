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
     * Is json array e.g. '[1]'
     *
     * @return \Closure
     */
    public function isJsonArray()
    {
        return function ($json): bool {
            if (!is_string($json)) {
                return false;
            }

            if (!is_array(json_decode($json, true))) {
                return false;
            }

            return $json[0] === '[';
        };
    }

    /**
     * Is json object e.g. '{"key":"value"}'
     *
     * @return \Closure
     */
    public function isJsonObject()
    {
        return function ($json): bool {
            if (!is_string($json)) {
                return false;
            }

            if (!is_array(json_decode($json, true))) {
                return false;
            }

            return $json[0] === '{';
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

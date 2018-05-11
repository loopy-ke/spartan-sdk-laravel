<?php

namespace Loopy\Spartan;

use Loopy\Spartan\Cache\CacheStore;

class LaravelCache implements CacheStore
{

    public function put($key, $details)
    {
        cache()->put($key, $details, 30);
    }

    public function get($key)
    {
        return cache()->get($key);
    }

    public function has($key)
    {
        return cache()->has($key);
    }

    public function forget($key)
    {
        cache()->forget($key);
    }
}
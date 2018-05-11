<?php


namespace Loopy\Spartan;


use Loopy\Spartan\Cache\CacheStore;
use Loopy\Spartan\Http\Client;

class Customer extends Member
{
    public function __construct(array $attributes = [], CacheStore $cache = null)
    {
        parent::__construct($attributes);
        $this->setClient(resolve(Client::class));
        $this->setCache(new LaravelCache());
    }

    public static function query()
    {
        return (new static());
    }
}
<?php


namespace Loopy\Spartan;


use Loopy\Spartan\Http\Client;

class Customer extends Member
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setClient($api = resolve(Client::class));
    }

}
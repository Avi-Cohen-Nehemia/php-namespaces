<?php

namespace App\Shopping;

// Create a class BasketItem in the App\Shopping namespace. It should take a type and price in
// the constructor. It should have type(), price(), and priceFormatted() methods.

class BasketItem
{
    private $item;
    private $price;

    public function __construct(string $item, float $price)
    {
        $this->item = $item;
        $this->price = $price;
    }

    public function type() : string
    {
        return $this->item;
    }

    public function price() : float
    {
        return $this->price;
    }

    public function priceFormatted() : string
    {
        return '£' . number_format($this->price, 2);
    }
}

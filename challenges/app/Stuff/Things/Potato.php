<?php

namespace App\Stuff\Things;

//Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method.
// hasGrown() should return false until the Potato has been watered five or more times.

class Potato
{
    private $amountOfWater = 0;

    public function water() : Potato
    {
        $this->amountOfWater += 1;
        return $this;
    }

    public function hasGrown() : bool
    {
        return $this->amountOfWater >= 5 ? true : false;
    }
}

<?php

namespace App\Stuff\Things;

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

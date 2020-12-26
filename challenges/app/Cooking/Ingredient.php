<?php

namespace App\Cooking;

// Create a class Ingredient in the App\Cooking namespace. It should take a name and an array of
// dietary information in the constructor. It should have a name() method which returns the
// name of the ingredient and a vegan() method which returns whether the ingredient contains "animal produce" in its dietary information.

class Ingredient
{
    private $name;
    private $dietaryInfo;

    public function __construct(string $name, array $info)
    {
        $this->name = $name;
        $this->dietaryInfo = collect($info);
    }

    public function name() : string
    {
        return $this->name;
    }

    public function vegan() : bool
    {
        return !$this->dietaryInfo->contains("animal produce");
    }
}

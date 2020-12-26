<?php
declare(strict_types=1);
include_once __DIR__ . "/vendor/autoload.php";

// exercise 1
echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"


// exercise 2
echo "\nQuestion 2:\n";

use App\Stuff\Things\Potato;

$potato = new Potato();
$potato->water(); // 1 water
$potato->water(); // 2 water

dump($potato->hasGrown()); // false

$potato->water(); // 3 water
$potato->water(); // 4 water
dump($potato->hasGrown()); // false

$potato->water(); // 5 water
dump($potato->hasGrown()); // true

$potato->water(); // 6 water
$potato->water(); // 7 water
dump($potato->hasGrown()); // true


// exercise 3
echo "\nQuestion 3:\n";

use App\Library\Book;

$book = new Book("Zero: The Biography of a Dangerous Idea", 256);

// read 12 pages
$book->read(12);
dump($book->currentPage()); // 13 - start on page 1

// read another 25 pages
$book->read(25);
dump($book->currentPage()); // 38


//exercise 4
echo "\nQuestion 4:\n";

use App\Shopping\BasketItem;

$item = new BasketItem("coffee", 3.50);

// get the type
dump($item->type()); // "coffee"

// get the price as a number
dump($item->price()); // 3.5

// get the price as a formatted string
dump($item->priceFormatted()); // "£3.50"


// exercise 5
echo "\nQuestion 5:\n";

use App\Cooking\Ingredient;

// ingredients take a name, followed by an array of dietary information
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);

dump($flour->name()); // "Flour"
dump($flour->vegan()); // true

dump($eggs->name()); // "Eggs"
dump($eggs->vegan()); // false

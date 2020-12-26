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

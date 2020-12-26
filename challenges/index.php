<?php
declare(strict_types=1);
include_once __DIR__ . "/vendor/autoload.php";

echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"

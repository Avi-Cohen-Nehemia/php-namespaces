<?php

declare(strict_types=1);

// In order to import files like classes and make use of them in another file we could
// use one of the require key words: require, require_once, include or include_once
// generally it is best to use require_once
require_once 'Post.php';

$post = new Post('Wombats', 'They are amazing');

var_dump($post);

<?php

// By using autoload we do not need to require manually any files anymore
// we just need to point to the correct namespace and autoload will require that file for us
include_once __DIR__ . "/vendor/autoload.php";

$post = new App\Post('la', 'blah');
$slackPost = new App\Slack\Post;

var_dump($post);
var_dump($slackPost);

<?php

declare(strict_types=1);

// In order to import files like classes and make use of them in another file we could
// use one of the require key words: require, require_once, include or include_once
// If you decide to import files that way should use require_once, however, namespaces
// are a much better way to import files around your app
require_once 'Post.php';
require_once 'Slack/Post.php';

// use is another way for us to import a file and that would work if we gave that file a namespace
use Slack\Post;

$post = new Post('Wombats', 'They are amazing');
$slackPost = new Slack\Post();

var_dump($post);
var_dump($slackPost);

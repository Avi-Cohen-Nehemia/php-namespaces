<?php

declare(strict_types=1);

class Post
{
    private $title;
    private $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }
}

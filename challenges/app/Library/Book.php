<?php

namespace App\Library;

class Book
{
    private $title;
    private $pages;
    private $currentPage = 1;

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read(int $pagesRead) : Book
    {
        if ($this->currentPage + $pagesRead > $this->pages) {
            $this->currentPage = $this->pages;
        } else {
            $this->currentPage += $pagesRead;
        }

        return $this;
    }

    public function currentPage() : int
    {
        return $this->currentPage;
    }
}

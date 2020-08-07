<?php

namespace App\Library;

class Book implements Titled
{
    private $title;
    private $pages;
    private $currentPage = 1;

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read(int $num) : Book
    {
        $this->currentPage += $num;
        return $this;
    }

    public function currentPage() : int
    {
        return $this->currentPage;
    }

    public function title() : string
    {
        return $this->title;
    }

    public function pages() : int
    {
        return $this->pages;
    }

}
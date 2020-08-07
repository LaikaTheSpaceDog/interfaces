<?php

namespace App\Library;
use Illuminate\Support\Collection;

class Library
{
    private $library;
    private $booklist;

    public function __construct()
    {
        $this->library = collect();
        $this->bookList = collect();
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->library[] = $shelf;
        $this->booklist[] = $shelf->titles();
        return $this;
    }

    public function titles() : array
    {
        return array_merge($this->booklist[0], $this->booklist[1]);
    }
}
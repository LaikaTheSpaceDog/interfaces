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
        $result = [];
        for ($i = 0; $i < count($this->booklist); $i +=1)
        {
            for ($j = 0; $j < count($this->booklist[$i]); $j += 1)
            {
                $result[] = $this->booklist[$i][$j];
            }
        }
        return $result;
    }
}
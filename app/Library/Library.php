<?php

namespace App\Library;
use Illuminate\Support\Collection;

class Library
{
    private $library;

    public function __construct()
    {
        $this->library = collect();
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->library[] = $shelf;
        return $this;
    }

    public function titles() : array
    {
        $titles = [];

        foreach($this->library as $shelf){
            $titles = array_merge($titles, $shelf->titles());
        }
        return $titles;
    }
}
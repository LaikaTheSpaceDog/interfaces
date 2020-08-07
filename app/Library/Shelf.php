<?php

namespace App\Library;
use Illuminate\Support\Collection;

class Shelf
{
    private $shelf;

    public function __construct()
    {
        $this->shelf = collect();
    }
    
    public function addItem(Titled $item) : Shelf
    {
        $this->shelf[] = $item;
        return $this;
    }

    public function titles() : array
    {
        $titles = [];

        foreach($this->shelf as $item){
            $titles[] = $item->title();
        }
        return $titles;
    }
}
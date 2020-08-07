<?php

namespace App\Tricksy;

use Iterator;

class Alphabet implements Iterator
{
    private $position = 65;
    private $key = 0;
    
    public function rewind() : Alphabet
    {
        $this->position = 65;
        $this->key = 0;
        return $this;
    }
    
    public function current() : string
    {
        return chr($this->position);
    }

    public function key() : int
    {
        return $this->key;
    }
    
    public function next() : Alphabet
    {
        $this->position +=1;
        $this->key +=1;
        return $this;
    }

    public function valid() : int
    {
        return $this->position < (65+26);
    }
}
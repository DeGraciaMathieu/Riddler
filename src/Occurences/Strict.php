<?php

namespace DeGraciaMathieu\Riddler\Occurences;
    
class Strict extends Occurence
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }
}

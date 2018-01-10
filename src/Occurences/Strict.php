<?php

namespace DeGraciaMathieu\Riddler\Occurences;
    
use DeGraciaMathieu\Riddler\Contracts\Occurence;

class Strict extends BaseOccurence implements Occurence
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }
}

<?php

namespace DeGraciaMathieu\Riddler\Occurrences;
    
use DeGraciaMathieu\Riddler\Contracts\Occurrence;

class Strict extends BaseOccurrence implements Occurrence
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }
}

<?php

namespace DeGraciaMathieu\Riddler\Occurrences;
    
use DeGraciaMathieu\Riddler\Contracts\Occurrence;

class Between extends BaseOccurrence implements Occurrence
{
    protected $size;

    public function __construct($smaller, $bigger)
    {
        $this->size = rand($smaller, $bigger);
    }
}

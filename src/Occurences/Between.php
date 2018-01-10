<?php

namespace DeGraciaMathieu\Riddler\Occurences;
    
use DeGraciaMathieu\Riddler\Contracts\Occurence;

class Between extends BaseOccurence implements Occurence
{
    protected $size;

    public function __construct($smaller, $bigger)
    {
        $this->size = rand($smaller, $bigger);
    }
}

<?php

namespace DeGraciaMathieu\Riddler\Occurences;
    
class Between extends Occurence
{
    protected $size;

    public function __construct($smaller, $bigger)
    {
        $this->size = rand($smaller, $bigger);
    }
}

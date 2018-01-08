<?php

namespace DeGraciaMathieu\Riddler\Occurences;
    
class Strict
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function parse(array $dictionary)
    {
        $tmp = [];

        for ($i=0; $i < $this->size; $i++) {

            shuffle($dictionary);

            $tmp[] = $dictionary[0];
        }

       return $tmp;
    }
}

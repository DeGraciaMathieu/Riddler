<?php

namespace DeGraciaMathieu\Riddler\Occurences;
    
class Between
{
    protected $size;

    public function __construct($size, $size2)
    {
        $this->size = rand($size, $size2);
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

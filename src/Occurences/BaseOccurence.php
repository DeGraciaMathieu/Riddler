<?php

namespace DeGraciaMathieu\Riddler\Occurences;
    
abstract class BaseOccurence
{
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

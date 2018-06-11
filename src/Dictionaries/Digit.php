<?php

namespace DeGraciaMathieu\Riddler\Dictionaries;

use DeGraciaMathieu\Riddler\Contracts\Dictionary;

class Digit extends AbstractDictionary implements Dictionary
{
    public function handle()
    {
        return [0,1,2,3,4,5,6,7,8,9];
    }
}

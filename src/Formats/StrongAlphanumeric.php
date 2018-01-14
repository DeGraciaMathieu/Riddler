<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Occurences;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Contracts\Format;

class StrongAlphanumeric implements Format
{
    public function handle()
    {
        return [
            [new Dictionaries\Digit(), new Occurences\Strict(10)],
            [new Dictionaries\Letter(), new Occurences\Strict(10)],
            [new Dictionaries\UppercaseLetter(), new Occurences\Strict(10)]
        ];
    }
}


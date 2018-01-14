<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Occurrences;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Contracts\Format;

class SmallAlphanumeric implements Format
{
    public function handle()
    {
        return [
            [new Dictionaries\Digit(), new Occurrences\Strict(5)],
            [new Dictionaries\Letter(), new Occurrences\Strict(5)],
            [new Dictionaries\UppercaseLetter(), new Occurrences\Strict(5)]
        ];
    }
}


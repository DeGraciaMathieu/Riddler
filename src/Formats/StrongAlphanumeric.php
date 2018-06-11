<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Occurrences;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Contracts\Format;

class StrongAlphanumeric implements Format
{
    public function handle()
    {
        return [
            [new Dictionaries\Digit(), new Occurrences\Strict(10)],
            [new Dictionaries\Letter(), new Occurrences\Strict(10)],
            [new Dictionaries\UppercaseLetter(), new Occurrences\Strict(10)]
        ];
    }
}

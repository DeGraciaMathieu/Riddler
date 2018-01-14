<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Occurences;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Contracts\Format;

class LongDigit implements Format
{
    public function handle()
    {
        return [
            [new Dictionaries\Digit(), new Occurences\Strict(30)]
        ];
    }
}


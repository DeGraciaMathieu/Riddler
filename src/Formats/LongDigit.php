<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Occurrences;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Contracts\Format;

class LongDigit implements Format
{
    public function handle()
    {
        return [
            [new Dictionaries\Digit(), new Occurrences\Strict(30)]
        ];
    }
}

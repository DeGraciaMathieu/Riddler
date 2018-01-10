<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Criterias;
use DeGraciaMathieu\Riddler\Occurences;
use DeGraciaMathieu\Riddler\Contracts\Format;

class SmallAlphanumeric implements Format
{
    public function handle()
    {
        return [
            [new Criterias\Digit(), new Occurences\Strict(2)],
            [new Criterias\Letter(), new Occurences\Strict(2)],
            [new Criterias\UppercaseLetter(), new Occurences\Strict(2)]
        ];
    }
}

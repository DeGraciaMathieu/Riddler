<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Criterias;
use DeGraciaMathieu\Riddler\Occurences;
use DeGraciaMathieu\Riddler\Contracts\Format;

class LongDigit implements Format
{
    public function handle()
    {
        return [
            [new Criterias\Digit(), new Occurences\Strict(30)]
        ];
    }
}


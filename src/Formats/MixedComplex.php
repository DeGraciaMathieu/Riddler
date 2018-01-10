<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Criterias;
use DeGraciaMathieu\Riddler\Occurences;
use DeGraciaMathieu\Riddler\Contracts\Format;

class MixedComplex implements Format
{
    public function handle()
    {
        return [
            [new Criterias\Digit(), new Occurences\Between(5, 7)],
            [new Criterias\Letter(), new Occurences\Between(5, 7)],
            [new Criterias\UppercaseLetter(), new Occurences\Between(5, 7)]
            [new Criterias\AccentedLetter(), new Occurences\Between(5, 7)],
            [new Criterias\AccentedUppercaseLetter(), new Occurences\Between(5, 7)],
            [new Criterias\SpecialCharacter(), new Occurences\Between(5, 7)],
        ];
    }
}

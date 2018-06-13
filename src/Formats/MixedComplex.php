<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Occurrences;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Contracts\Format;

class MixedComplex implements Format
{
    public function handle()
    {
        return [
            [new Dictionaries\Digit(), new Occurrences\Between(5, 7)],
            [new Dictionaries\Letter(), new Occurrences\Between(5, 7)],
            [new Dictionaries\UppercaseLetter(), new Occurrences\Between(5, 7)],
            [new Dictionaries\AccentedLetter(), new Occurrences\Between(5, 7)],
            [new Dictionaries\AccentedUppercaseLetter(), new Occurrences\Between(5, 7)],
            [new Dictionaries\SpecialCharacter(), new Occurrences\Between(5, 7)],
        ];
    }
}

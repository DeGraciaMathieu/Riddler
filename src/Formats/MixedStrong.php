<?php

namespace DeGraciaMathieu\Riddler\Formats;

use DeGraciaMathieu\Riddler\Occurences;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Contracts\Format;

class MixedStrong implements Format
{
    public function handle()
    {
        return [
            [new Dictionaries\Digit(), new Occurences\Between(5, 7)],
            [new Dictionaries\Letter(), new Occurences\Between(5, 7)],
            [new Dictionaries\AccentedLetter(), new Occurences\Between(5, 7)],
            [new Dictionaries\UppercaseLetter(), new Occurences\Between(5, 7)]
        ];
    }
}

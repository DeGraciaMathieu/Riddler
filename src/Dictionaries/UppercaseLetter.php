<?php

namespace DeGraciaMathieu\Riddler\Dictionaries;
    
use DeGraciaMathieu\Riddler\Contracts\Dictionary;

class UppercaseLetter implements Dictionary
{
    public function handle()
    {
        return ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    }
}

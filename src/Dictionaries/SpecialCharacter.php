<?php

namespace DeGraciaMathieu\Riddler\Dictionaries;
    
use DeGraciaMathieu\Riddler\Contracts\Dictionary;

class SpecialCharacter implements Dictionary
{
    public function handle()
    {
        return ['[','&','+','#','|','^','°','=','!','@','%','*','?','_','~','-','§',':',';','.',']'];
    }
}

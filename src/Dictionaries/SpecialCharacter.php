<?php

namespace DeGraciaMathieu\Riddler\Dictionaries;
    
use DeGraciaMathieu\Riddler\Contracts\Dictionary;

class SpecialCharacter extends AbstractDictionary implements Dictionary
{
    public function handle()
    {
        return ['[','&','+','#','|','^','°','=','!','@','%','*','?','_','~','-','§',':',';','.',']','\\','/'];
    }
}

<?php

namespace DeGraciaMathieu\Riddler\Criterias;
    
use DeGraciaMathieu\Riddler\Contracts\Criteria;

class SpecialCharacter implements Criteria
{
    public function handle()
    {
        return ['[','&','+','#','|','^','°','=','!','@','%','*','?','_','~','-','§',':',';','.',']'];
    }
}

<?php

namespace DeGraciaMathieu\Riddler\Dictionaries;
    
use DeGraciaMathieu\Riddler\Contracts\Dictionary;

class Letter extends AbstractDictionary implements Dictionary
{
    public function handle()
    {
        return ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    }
}

<?php

namespace DeGraciaMathieu\Riddler\Criterias;
    
use DeGraciaMathieu\Riddler\Contracts\Criteria;

class Letter implements Criteria
{
    public function handle()
    {
        return ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    }
}

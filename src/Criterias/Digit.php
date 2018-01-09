<?php

namespace DeGraciaMathieu\Riddler\Criterias;
    
use DeGraciaMathieu\Riddler\Contracts\Criteria;
    
class Digit implements Criteria
{
    public function handle()
    {
        return [0,1,2,3,4,5,6,7,8,9];
    }
}

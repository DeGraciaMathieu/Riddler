<?php

namespace DeGraciaMathieu\Riddler\Criterias;
    
use DeGraciaMathieu\Riddler\Contracts\Criteria;

class UppercaseLetter implements Criteria
{
    public function handle()
    {
        return ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    }
}

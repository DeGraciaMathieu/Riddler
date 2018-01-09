<?php

namespace DeGraciaMathieu\Riddler\Criterias;
    
use DeGraciaMathieu\Riddler\Contracts\Criteria;

class AccentedUppercaseLetter implements Criteria
{
    public function handle()
    {
        return ['À','Á','Â','Ã','Ä','Å','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý'];
    }
}

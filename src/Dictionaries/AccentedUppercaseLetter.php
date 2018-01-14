<?php

namespace DeGraciaMathieu\Riddler\Dictionaries;
    
use DeGraciaMathieu\Riddler\Contracts\Dictionary;

class AccentedUppercaseLetter implements Dictionary
{
    public function handle()
    {
        return ['À','Á','Â','Ã','Ä','Å','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý'];
    }
}

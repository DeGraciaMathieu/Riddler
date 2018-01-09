<?php

namespace DeGraciaMathieu\Riddler\Criterias;
    
use DeGraciaMathieu\Riddler\Contracts\Criteria;

class AccentedLetter  implements Criteria
{
    public function handle()
    {
        return ['à','á','â','ã','ä','å','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ù','ú','û','ü','ý'];
    }
}

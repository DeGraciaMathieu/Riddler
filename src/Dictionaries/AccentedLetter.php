<?php

namespace DeGraciaMathieu\Riddler\Dictionaries;

use DeGraciaMathieu\Riddler\Contracts\Dictionary;

class AccentedLetter extends AbstractDictionary implements Dictionary
{
    public function handle()
    {
        return ['à','á','â','ã','ä','å','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ù','ú','û','ü','ý'];
    }
}

<?php

namespace DeGraciaMathieu\Riddler\Occurrences;

use DeGraciaMathieu\Riddler\Contracts\Occurrence;

class None implements Occurrence
{
    /**
     * Retourne la taille de l'occurence
     *
     * @return integer
     */
    public function size()
    {
        return 0;
    }

    /**
     * Valide la range de l'occurence
     *
     * @param integer $value
     * @return integer
     */
    public function validate($value)
    {
        return (int) $value === 0;
    }
}

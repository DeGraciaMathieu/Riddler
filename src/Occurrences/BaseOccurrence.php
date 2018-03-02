<?php

namespace DeGraciaMathieu\Riddler\Occurrences;

abstract class BaseOccurrence
{
    /**
     * Retourne la taille de l'occurence
     *
     * @return integer
     */
    public function size()
    {
        return $this->size;
    }
}

<?php

namespace DeGraciaMathieu\Riddler\Contracts;

interface Occurrence
{
    /**
     * Retourne la taille de l'occurence
     *
     * @return integer
     */
    public function size();

    /**
     * Valide la range de l'occurence
     *
     * @param integer $value
     * @return integer
     */
    public function validate($value);
}

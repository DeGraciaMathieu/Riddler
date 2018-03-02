<?php

namespace DeGraciaMathieu\Riddler\Contracts;

interface Occurrence
{
    public function parse(array $dictionary);

    /**
     * Retourne la taille de l'occurence
     *
     * @return integer
     */
    public function size();
}

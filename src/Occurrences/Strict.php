<?php

namespace DeGraciaMathieu\Riddler\Occurrences;

use DeGraciaMathieu\Riddler\Contracts\Occurrence;

class Strict extends BaseOccurrence implements Occurrence
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * Valide la range de l'occurence
     *
     * @param integer $value
     * @return integer
     */
    public function validate($value)
    {
        return (int) $value === $this->size;
    }

    public function getName()
    {
        return 'strict_' . $this->size;
    }
}

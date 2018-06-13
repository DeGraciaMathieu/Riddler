<?php

namespace DeGraciaMathieu\Riddler\Occurrences;

use DeGraciaMathieu\Riddler\Contracts\Occurrence;

class Between extends BaseOccurrence implements Occurrence
{
    protected $smaller;
    protected $bigger;
    protected $size;

    public function __construct($smaller, $bigger)
    {
        $this->smaller = $smaller;
        $this->bigger = $bigger;
        $this->size = rand($smaller, $bigger);
    }

    /**
     * Valide la range de l'occurence
     *
     * @param integer $value
     * @return integer
     */
    public function validate($value)
    {
        return $value >= $this->smaller && $value <= $this->bigger;
    }

    public function getName()
    {
        return 'between_' . $this->smaller . '_' . $this->bigger;
    }
}

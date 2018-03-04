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

    public function validateRange($value)
    {
        return $value >= $this->smaller && $value <= $this->bigger;
    }
}

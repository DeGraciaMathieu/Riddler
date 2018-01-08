<?php

namespace DeGraciaMathieu\Riddler;

class CriteriaBuilder {

    public function __construct($criteria, $occurence)
    {
        $this->criteria = $criteria;
        $this->occurence = $occurence;
    }

    public function build()
    {
        return $this->occurence->parse($this->criteria->handle());
    }
}

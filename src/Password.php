<?php

namespace DeGraciaMathieu\Riddler;

class Password {

    public function __construct()
    {
        $this->criteriasAggregator = [];
        $this->manager = new Manager;
    }

    public function addCriteria($criteria, $occurence = null)
    {
        $buildCriteria = $this->manager->buildCriteria($criteria, $occurence);

        $this->criteriasAggregator[] = $buildCriteria;
    }   

    public function generate()
    {
        return $this->manager->generate($this->criteriasAggregator);
    }	
}
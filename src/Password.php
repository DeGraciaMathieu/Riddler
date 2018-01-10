<?php

namespace DeGraciaMathieu\Riddler;

use DeGraciaMathieu\Riddler\Contracts;

class Password {

    protected $criteriasAggregator;
    protected $manager;

    public function __construct()
    {
        $this->criteriasAggregator = [];
        $this->manager = new Manager;
    }

    public function addCriteria($criteria, $occurence)
    {
        $buildCriteria = $this->manager->buildCriteria($criteria, $occurence);

        $this->criteriasAggregator[] = $buildCriteria;
    }   

    public function subCriteria(Contracts\Criteria $subCriteria)
    {
        $this->criteriasAggregator = $this->manager->subCriteria($this->criteriasAggregator, $subCriteria);
    }

    public function addFormat(Contracts\Format $format)
    {
        $criteriasBundle = $format->handle();

        foreach ($criteriasBundle as $bundle) {
            $this->addCriteria($bundle[0], $bundle[1]);
        }
    }  

    public function generate()
    {
        return $this->manager->generate($this->criteriasAggregator);
    }	
}

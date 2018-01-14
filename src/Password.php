<?php

namespace DeGraciaMathieu\Riddler;

use DeGraciaMathieu\Riddler\Contracts;

class Password {

    protected $criterias = [];
    protected $manager;

    public function __construct()
    {
        $this->manager = new Manager;
    }

    public function addCriteria(Contracts\Dictionary $dictionary, Contracts\Occurence $occurence)
    {
        $buildCriteria = $this->manager->buildCriteria($dictionary, $occurence);

        $this->criterias[] = $buildCriteria;
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
        return $this->manager->generate($this->criterias);
    }	
}

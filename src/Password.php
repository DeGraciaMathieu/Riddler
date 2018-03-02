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

    public function addCriteria(Contracts\Dictionary $dictionary, Contracts\Occurrence $occurrence)
    {
        $buildCriteria = $this->manager->buildCriteria($dictionary, $occurrence);

        $this->criterias[] = $buildCriteria;
    }

    public function addFormat(Contracts\Format $format)
    {
        $criteriasBundle = $format->handle();

        foreach ($criteriasBundle as $bundle) {
            $this->addCriteria($bundle[0], $bundle[1]);
        }
    }

    /**
     * Génère un nouveau mot de passe depuis les critères
     *
     * @return string
     */
    public function generate()
    {
        return $this->manager->generate($this->criterias);
    }

    /**
     * Evalue le mot de passe
     *
     * @return string
     */
    public function score($value)
    {
        return $this->manager->score($value, $this->criterias);
    }
}

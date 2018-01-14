<?php

namespace DeGraciaMathieu\Riddler;

use DeGraciaMathieu\Riddler\Contracts;

class Manager {

    public function buildCriteria(Contracts\Dictionary $dictionary, Contracts\Occurence $occurence)
    {
        return new Criteria($dictionary, $occurence);
    }

    public function generate(array $criteriaBuilderList)
    {
        $concretPassword = [];

        foreach ($criteriaBuilderList as $criteriaBuilder) {
            $concretPassword = array_merge($concretPassword, $criteriaBuilder->build());
        }

        shuffle($concretPassword);

        return implode($concretPassword);
    }
}

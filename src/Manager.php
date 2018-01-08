<?php

namespace DeGraciaMathieu\Riddler;

class Manager {

    public function buildCriteria($criteria, $occurence)
    {
        return new CriteriaBuilder($criteria, $occurence);
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

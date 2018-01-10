<?php

namespace DeGraciaMathieu\Riddler;

use DeGraciaMathieu\Riddler\Contracts;

class Manager {

    public function buildCriteria(Contracts\Criteria $criteria, Contracts\Occurence $occurence)
    {
        return new CriteriaBuilder($criteria, $occurence);
    }

    public function subCriteria(array $criteriaBuilderList, Contracts\Criteria $subCriteria)
    {
        return array_filter(function($criteriaBuilder) use($subCriteria) {
            return ! $criteriaBuilder->criteria instanceof $subCriteria;
        }, $criteriaBuilderList);
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

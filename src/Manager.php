<?php

namespace DeGraciaMathieu\Riddler;

use DeGraciaMathieu\Riddler\Contracts;

class Manager {

    public function buildCriteria(Contracts\Dictionary $dictionary, Contracts\Occurrence $occurrence)
    {
        return new Criteria($dictionary, $occurrence);
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

    /**
     * Pourcentage de critères vérifiés
     *
     * @param  string $password
     * @param  array  $criterias
     * @return integer
     */
    public function score($password, array $criterias)
    {
        $criteriasPassed = array_filter($criterias, function ($criteria) use ($password) {
            return $criteria->passes($password);
        });

        return (int) count($criteriasPassed) * 100 / count($criterias);
    }
}

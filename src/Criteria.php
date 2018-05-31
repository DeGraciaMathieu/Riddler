<?php

namespace DeGraciaMathieu\Riddler;

use DeGraciaMathieu\Riddler\Contracts;

class Criteria
{

    protected $name;
    protected $dictionary;
    protected $occurrence;

    public function __construct($name, Contracts\Dictionary $dictionary, Contracts\Occurrence $occurrence)
    {
        $this->dictionary = $dictionary;
        $this->occurrence = $occurrence;
        $this->setName($name);
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        if (! $name) {
             $name = $this->dictionary->getName() . '_' . $this->occurrence->getName();
        }

        return $this->name = $name;
    }

    public function build()
    {
        $dictionary = $this->dictionary->handle();
        $size = $this->occurrence->size();

        $tmp = [];

        for ($i=0; $i < $size; $i++) {
            shuffle($dictionary);

            $tmp[] = $dictionary[0];
        }

        return $tmp;
    }

    /**
     * Détermine si le mot de passe vérifie le critère
     *
     * @param string $password
     * @return boolean
     */
    public function passes($password)
    {
        $dictionary = $this->dictionary->handle();

        $regex = preg_quote(implode($dictionary), '#');

        $result = preg_match_all("#[" . $regex . "]#u", $password, $matches);

        return $this->occurrence->validate($result);
    }
}

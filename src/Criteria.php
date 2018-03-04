<?php

namespace DeGraciaMathieu\Riddler;

class Criteria {

	protected $dictionary;
	protected $occurrence;

    public function __construct($dictionary, $occurrence)
    {
        $this->dictionary = $dictionary;
        $this->occurrence = $occurrence;
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

        return $this->occurrence->validateRange($result);
    }
}

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
        $size = $this->occurrence->size();

        $regex = preg_quote(implode($this->dictionary->handle()), '/');

        $regex = array_fill(0, $size, '[' . $regex . ']');

        $regex = '/(?=.*' . implode('.*', $regex) . ')/';

        return preg_match($regex, $password);
    }
}

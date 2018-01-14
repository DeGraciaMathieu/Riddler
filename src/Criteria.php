<?php

namespace DeGraciaMathieu\Riddler;

class Criteria {

    public function __construct($dictionary, $occurence)
    {
        $this->dictionary = $dictionary;
        $this->occurence = $occurence;
    }

    public function build()
    {
        return $this->occurence->parse($this->dictionary->handle());
    }
}

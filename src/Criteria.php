<?php

namespace DeGraciaMathieu\Riddler;

class Criteria {

    public function __construct($dictionary, $occurrence)
    {
        $this->dictionary = $dictionary;
        $this->occurrence = $occurrence;
    }

    public function build()
    {
        return $this->occurrence->parse($this->dictionary->handle());
    }
}

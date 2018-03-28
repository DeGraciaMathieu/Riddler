<?php

namespace DeGraciaMathieu\Riddler\Dictionaries;

abstract class AbstractDictionary
{
    public function getName()
    {
        $path = explode('\\', get_class($this));

        return strtolower(array_pop($path));
    }
}

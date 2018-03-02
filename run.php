<?php

require 'vendor\autoload.php';

use DeGraciaMathieu\Riddler\Formats;

/*$password = new Password();
$password->addFormat(new Formats\StrongAlphanumeric());
$password->generate(); // "41súdSXWHV65k2G0lr0õèñzåY"

//$pw->addCriteria(new Criterias\SpecialCharacter(), new Occurences\Strict(10));

var_dump(($password->generate()));

*/


use DeGraciaMathieu\Riddler\Password;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Occurrences;

$password = new Password();
$password->addCriteria(new Dictionaries\Digit(), new Occurrences\Strict(5));
$password->addCriteria(new Dictionaries\Letter(), new Occurrences\Between(3, 6));
var_dump($password->generate());
<?php

require 'vendor\autoload.php';

use \DeGraciaMathieu\Riddler\Password;
use \DeGraciaMathieu\Riddler\Criterias\AccentedLetter;
use \DeGraciaMathieu\Riddler\Criterias\Letter;
use \DeGraciaMathieu\Riddler\Criterias\UppercaseLetter;
use \DeGraciaMathieu\Riddler\Criterias\Digit;
use \DeGraciaMathieu\Riddler\Criterias\Number;
use \DeGraciaMathieu\Riddler\Criterias\SpecialCharacter;
use \DeGraciaMathieu\Riddler\Occurences\Strict;
use \DeGraciaMathieu\Riddler\Occurences\Between;


$password = new Password;
$password->addCriteria(new Digit(), new Strict(10));
($password->generate()); // "4731412968"

$password = new Password;
$password->addCriteria(new Digit(), new Between(8, 12));
$password->generate(); // "84636538992"

$password = new Password;
$password->addCriteria(new Letter(), new Strict(20));
$password->generate(); // "tugmdzkgohnnkfrxuqns"

$password = new Password;
$password->addCriteria(new UppercaseLetter(), new Strict(20));
$password->generate(); // "JDXIRCEBWDPZLCWIJNYZ"

$password = new Password;
$password->addCriteria(new UppercaseLetter(), new Between(5, 7));
$password->addCriteria(new Letter(), new Between(5, 7));
$password->generate(); // "xIXPstuqTZmb"

$password = new Password;
$password->addCriteria(new SpecialCharacter(), new Strict(15));
$password->generate(); // "#^_=%§][:@_]^%="

$password = new Password;
$password->addCriteria(new AccentedLetter(), new Strict(15));
$password->generate(); // "üãöîâüîüûàóäùéú"

$password = new Password;
$password->addCriteria(new Digit(), new Strict(5));
$password->addCriteria(new Letter(), new Strict(5));
$password->addCriteria(new SpecialCharacter(), new Between(5, 10));
$password->generate(); // "!186u;n&~§3r7hb|~?"

$password = new Password;
$password->addCriteria(new Digit(), new Strict(5));
$password->addCriteria(new Letter(), new Strict(5));
$password->addCriteria(new UppercaseLetter(), new Strict(5));
$password->addCriteria(new AccentedLetter(), new Strict(5));
$password->addCriteria(new SpecialCharacter(), new Strict(5));
$password->generate(); // "uELòp§iO°L§7b~â]3ûë7èm96A"

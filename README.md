<p align="center">
<img src="https://i62.servimg.com/u/f62/11/13/61/32/riddle10.png" width="300">
</p>
<p align="center">
<a href="https://www.codacy.com/app/DeGraciaMathieu/Riddler?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=DeGraciaMathieu/Riddler&amp;utm_campaign=Badge_Grade"><img src="https://api.codacy.com/project/badge/Grade/d662a4fa526a4a709d3ad1991cba2533" alt="Codacy Badge"></a>
<a href="https://scrutinizer-ci.com/g/degraciamathieu/riddler/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/build-status/master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/badges/build.png?b=master" alt="Build Status"></a>
<a href="https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/badges/coverage.png?b=master" alt="Code Coverage"></a>
<a href="https://packagist.org/packages/degraciamathieu/riddler"><img src="https://img.shields.io/packagist/v/degraciamathieu/riddler.svg?style=flat-square" alt="Latest Version on Packagist"></a>
</p>
 
# DeGraciaMathieu/Riddler

Password generator service
 
## Installation
 
Run in console below command to download package to your project:

```
composer require degraciamathieu/riddler
```
## Usage
 
A password is a set of one or more criteria composed of a dictionary and an occurrence. 

The available dictionaries are :
* AccentedLetter 
* AccentedUppercaseLetter
* Digit
* Letter
* SpecialCharacter
* UppercaseLetter

Available occurrences :
* Strict
* Between

```php
require 'vendor\autoload.php';

use DeGraciaMathieu\Riddler\Password;
use DeGraciaMathieu\Riddler\Dictionaries;
use DeGraciaMathieu\Riddler\Occurrences;

$password = new Password();
$password->addCriteria(new Dictionaries\Digit(), new Occurrences\Strict(5));
$password->addCriteria(new Dictionaries\Letter(), new Occurrences\Between(3, 6));
$password->generate();
```

To build passwords faster, it is possible to use a set of prescinded criteria using the formats.

Available formats :
* LongDigit
* MixedComplex
* MixedStrong
* SmallAlphanumeric
* StrongAlphanumeric

```php
require 'vendor\autoload.php';

use DeGraciaMathieu\Riddler\Password;
use DeGraciaMathieu\Riddler\Formats;

$password = new Password();
$password->addFormat(new Formats\StrongAlphanumeric());
$password->generate();
```

It is possible to create its own class format implementing the interface DeGraciaMathieu\Riddler\Contracts\Format

## Examples
### Classics

```php
$password = new Password;
$password->addCriteria(new Digit(), new Strict(10));
$password->generate(); // "4731412968"

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
$password->addCriteria(new AccentedUppercaseLetter(), new Strict(15));
$password->generate(); // "ÂÚÏÝÒÌÀÂÜÝÛËÍÊÌ"

$password = new Password;
$password->addCriteria(new Digit(), new Strict(5));
$password->addCriteria(new Letter(), new Strict(5));
$password->addCriteria(new SpecialCharacter(), new Between(5, 10));
$password->generate(); // "!186u;n&~§3r7hb|~?"

$password = new Password;
$password->addCriteria(new Digit(), new Between(5, 7));
$password->addCriteria(new Letter(), new Between(5, 7));
$password->addCriteria(new UppercaseLetter(), new Between(5, 7));
$password->addCriteria(new AccentedLetter(), new Between(5, 7));
$password->addCriteria(new SpecialCharacter(), new Between(5, 7));
$password->generate(); // "uELòp§iO°L§7b~â]3ûë7èm96A"
```

### Formats

```php
$password = new Password();
$password->addFormat(new Formats\LongDigit());
$password->generate(); // "075197457894437657185665450123"

$password = new Password();
$password->addFormat(new Formats\SmallAlphanumeric());
$password->generate(); // "mA5M6ap167gRTeE"

$password = new Password();
$password->addFormat(new Formats\StrongAlphanumeric());
$password->generate(); // "492OHwdJEdDT5Lb89zhY9c26j4XhmX"

$password = new Password();
$password->addFormat(new Formats\MixedStrong());
$password->generate(); // "41súdSXWHV65k2G0lr0õèñzåY"

$password = new Password();
$password->addFormat(new Formats\MixedComplex());
$password->generate(); // "Äûc[%ÀÁkWï_1V8k3uw*3§ÔEaAÍ+5§ôåûWYI6äÕ7"
```

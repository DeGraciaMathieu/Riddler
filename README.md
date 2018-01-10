[![Codacy Badge](https://api.codacy.com/project/badge/Grade/d662a4fa526a4a709d3ad1991cba2533)](https://www.codacy.com/app/DeGraciaMathieu/Riddler?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=DeGraciaMathieu/Riddler&amp;utm_campaign=Badge_Grade)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/degraciamathieu/riddler/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/badges/build.png?b=master)](https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/DeGraciaMathieu/Riddler/?branch=master)


# DeGraciaMathieu/Riddler

Password generator service
 
## Installation
 
Run in console below command to download package to your project:

```
composer require degraciamathieu/riddler
```
## Usage
 
In progress...

## Examples
### Classics

 ```php
use DeGraciaMathieu\Riddler\Password;
use DeGraciaMathieu\Riddler\Criterias;
use DeGraciaMathieu\Riddler\Occurences;

$password = new Password;
$password->addCriteria(new Criterias\Digit(), new Occurences\Strict(10));
$password->generate(); // "4731412968"

$password = new Password;
$password->addCriteria(new Criterias\Letter(), new Occurences\Strict(20));
$password->generate(); // "tugmdzkgohnnkfrxuqns"

$password = new Password;
$password->addCriteria(new Criterias\UppercaseLetter(), new Occurences\Strict(20));
$password->generate(); // "JDXIRCEBWDPZLCWIJNYZ"

$password = new Password;
$password->addCriteria(new Criterias\UppercaseLetter(), new Occurences\Between(5, 7));
$password->addCriteria(new Criterias\Letter(), new Occurences\Between(5, 7));
$password->generate(); // "xIXPstuqTZmb"

$password = new Password;
$password->addCriteria(new Criterias\SpecialCharacter(), new Occurences\Strict(15));
$password->generate(); // "#^_=%§][:@_]^%="

$password = new Password;
$password->addCriteria(new Criterias\AccentedLetter(), new Occurences\Strict(15));
$password->generate(); // "üãöîâüîüûàóäùéú"

$password = new Password;
$password->addCriteria(new Criterias\AccentedUppercaseLetter(), new Occurences\Strict(15));
$password->generate(); // "ÂÚÏÝÒÌÀÂÜÝÛËÍÊÌ"

$password = new Password;
$password->addCriteria(new Criterias\Digit(), new Occurences\Strict(5));
$password->addCriteria(new Criterias\Letter(), new Occurences\Strict(5));
$password->addCriteria(new Criterias\SpecialCharacter(), new Occurences\Between(5, 10));
$password->generate(); // "!186u;n&~§3r7hb|~?"

$password = new Password;
$password->addCriteria(new Criterias\Digit(), new Occurences\Between(5, 7));
$password->addCriteria(new Criterias\Letter(), new Occurences\Between(5, 7));
$password->addCriteria(new Criterias\UppercaseLetter(), new Occurences\Between(5, 7));
$password->addCriteria(new Criterias\AccentedLetter(), new Occurences\Between(5, 7));
$password->addCriteria(new Criterias\SpecialCharacter(), new Occurences\Between(5, 7));
$password->generate(); // "uELòp§iO°L§7b~â]3ûë7èm96A"
```

### Formats

```php
use DeGraciaMathieu\Riddler\Formats;
use DeGraciaMathieu\Riddler\Password;

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
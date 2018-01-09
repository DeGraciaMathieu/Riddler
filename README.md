[![Codacy Badge](https://api.codacy.com/project/badge/Grade/d662a4fa526a4a709d3ad1991cba2533)](https://www.codacy.com/app/DeGraciaMathieu/Riddler?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=DeGraciaMathieu/Riddler&amp;utm_campaign=Badge_Grade)

# DeGraciaMathieu/Riddler

Password generator service for Laravel 5
 
## Installation
 
Run in console below command to download package to your project:

```
composer require degraciamathieu/riddler
```
 
## Configuration
 
### For Laravel 5

In `/config/app.php` add RiddlerServiceProvider:
```
DeGraciaMathieu\Riddler\RiddlerServiceProvider::class,
```
 
# Usage
 
In progress...

# Examples
 
```php
$password = new Password;
$password->addCriteria(new Digit(), new Strict(10));
$password->generate(); // "4731412968"

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
```

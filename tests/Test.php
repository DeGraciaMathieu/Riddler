<?php

use DeGraciaMathieu\Riddler\Formats;
use DeGraciaMathieu\Riddler\Password;
use DeGraciaMathieu\Riddler\Occurrences;
use DeGraciaMathieu\Riddler\Dictionaries;

class Test extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function emptyPassword()
    {
        $pw = new Password();

        $str = $pw->generate();

        $this->assertEmpty($str);
    }

    /** @test */
    public function letterPasswordOnly()
    {
        $pw = new Password();

        $pw->addCriteria(new Dictionaries\Letter(), new Occurrences\Strict(10));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertRegExp('/[a-z]/', $str);
    }

    /** @test */
    public function alphanumericPasswordOnly()
    {
        $pw = new Password();

        $pw->addCriteria(new Dictionaries\Letter(), new Occurrences\Strict(5));
        $pw->addCriteria(new Dictionaries\UppercaseLetter(), new Occurrences\Strict(5));
        $pw->addCriteria(new Dictionaries\Digit(), new Occurrences\Strict(5));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(15, mb_strlen($str));

        $this->assertRegExp('/[a-zA-Z0-9]/', $str);
    }

    /** @test */
    public function accentedLetterOnly()
    {
        $pw = new Password();

        $accentedLetter = new Dictionaries\AccentedLetter();

        $pw->addCriteria($accentedLetter, new Occurrences\Strict(5));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(5, mb_strlen($str));

        $this->assertRegExp('/[' . implode($accentedLetter->handle()) . ']{5}/', $str);
    }

    /** @test */
    public function accentedUppercaseLetterOnly()
    {
        $pw = new Password();

        $accentedUppercaseLetter = new Dictionaries\AccentedUppercaseLetter();

        $pw->addCriteria($accentedUppercaseLetter, new Occurrences\Strict(5));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(5, mb_strlen($str));

        $this->assertRegExp('/[' . implode($accentedUppercaseLetter->handle()) . ']{5}/', $str);
    }

    /** @test */
    public function specialCharacterOnly()
    {
        $pw = new Password();

        $specialCharacter = new Dictionaries\SpecialCharacter();

        $pw->addCriteria($specialCharacter, new Occurrences\Strict(5));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(5, mb_strlen($str));

        $chars = array_map(function ($c) {
            return '\\' . $c;
        }, $specialCharacter->handle());

        $this->assertRegExp('/[' . implode($chars) . ']{5}/', $str);
    }

    /** @test */
    public function longDigitFormatOnly()
    {
        $pw = new Password();

        $pw->addFormat(new Formats\LongDigit());

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertRegExp('/\d{30}/', $str);
    }

    /** @test */
    public function smallAlphanumericFormatOnly()
    {
        $pw = new Password();

        $pw->addFormat(new Formats\SmallAlphanumeric());

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(15, mb_strlen($str));

        $this->assertRegExp('/[a-zA-Z0-9]/', $str);
    }

    /** @test */
    public function strongAlphanumericFormatOnly()
    {
        $pw = new Password();

        $pw->addFormat(new Formats\StrongAlphanumeric());

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(30, mb_strlen($str));

        $this->assertRegExp('/[a-zA-Z0-9]/', $str);
    }

    /** @test */
    public function mixedStrongFormatOnly()
    {
        $pw = new Password();

        $pw->addFormat(new Formats\MixedStrong());

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        // $this->assertEquals(30, mb_strlen($str));

        // $this->assertRegExp('/[a-zA-Z0-9]/', $str);
    }

    /** @test */
    public function mixedComplexFormatOnly()
    {
        $pw = new Password();

        $pw->addFormat(new Formats\MixedComplex());

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        // $this->assertEquals(30, mb_strlen($str));

        // $this->assertRegExp('/[a-zA-Z0-9]/', $str);
    }


    /** @test */
    public function digitPasswordOnly()
    {
        $pw = new Password();

        $pw->addCriteria(new Dictionaries\Digit(), new Occurrences\Strict(10));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertRegExp('/\d{10}/', $str);
    }

    /** @test */
    public function strictOccurrences()
    {
        $dictionary = ['a', 'b', 'c', 'd'];

        $strict = new Occurrences\Strict(5);
        $result = $strict->parse($dictionary);

        $this->assertTrue(is_array($result));
        $this->assertEquals(5, count($result));
        $this->assertContains($result[0], $dictionary);
        $this->assertContains($result[1], $dictionary);
        $this->assertContains($result[2], $dictionary);
        $this->assertContains($result[3], $dictionary);
    }

    /** @test */
    public function betweenOccurrences()
    {
        $dictionary = ['a', 'b', 'c', 'd'];

        $strict = new Occurrences\Between(3, 5);
        $result = $strict->parse($dictionary);

        $this->assertTrue(is_array($result));
        $this->assertTrue(count($result) >= 3 && count($result) <= 5);
        $this->assertContains($result[0], $dictionary);
        $this->assertContains($result[1], $dictionary);
        $this->assertContains($result[2], $dictionary);
    }

    /** @test */
    public function perfectScore()
    {
        $string = '1a4bcT@Y';

        $password = new Password();

        $password->addCriteria(new Dictionaries\Digit(), new Occurrences\Strict(2));
        $password->addCriteria(new Dictionaries\Letter(), new Occurrences\Strict(3));
        $password->addCriteria(new Dictionaries\UppercaseLetter(), new Occurrences\Strict(2));
        $password->addCriteria(new Dictionaries\SpecialCharacter(), new Occurrences\Strict(1));

        $this->assertEquals($password->score($string), 100);
    }
}

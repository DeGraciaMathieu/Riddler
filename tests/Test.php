<?php

use DeGraciaMathieu\Riddler\Password;
use DeGraciaMathieu\Riddler\Criterias;
use DeGraciaMathieu\Riddler\Formats;
use DeGraciaMathieu\Riddler\Occurences;

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

        $pw->addCriteria(new Criterias\Letter(), new Occurences\Strict(10));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertRegExp('/[a-z]/', $str);
    }

    /** @test */
    public function alphanumericPasswordOnly()
    {
        $pw = new Password();

        $pw->addCriteria(new Criterias\Letter(), new Occurences\Strict(5));
        $pw->addCriteria(new Criterias\UppercaseLetter(), new Occurences\Strict(5));
        $pw->addCriteria(new Criterias\Digit(), new Occurences\Strict(5));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(15, mb_strlen($str));

        $this->assertRegExp('/[a-zA-Z0-9]/', $str);
    }

    /** @test */
    public function accentedLetterOnly()
    {
        $pw = new Password();

        $accentedLetter = new Criterias\AccentedLetter();

        $pw->addCriteria($accentedLetter, new Occurences\Strict(5));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(5, mb_strlen($str));

        $this->assertRegExp('/[' . implode($accentedLetter->handle()) . ']{5}/', $str);        
    }

    /** @test */
    public function accentedUppercaseLetterOnly()
    {
        $pw = new Password();

        $accentedUppercaseLetter = new Criterias\AccentedUppercaseLetter();

        $pw->addCriteria($accentedUppercaseLetter, new Occurences\Strict(5));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(5, mb_strlen($str));

        $this->assertRegExp('/[' . implode($accentedUppercaseLetter->handle()) . ']{5}/', $str);        
    }    

    /** @test */
    public function specialCharacterOnly()
    {
        $pw = new Password();

        $pw->addCriteria(new Criterias\SpecialCharacter(), new Occurences\Strict(5));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertEquals(5, mb_strlen($str));

        $this->assertRegExp('/[\[\&\+\#\|\^\°\=\!\@\%\*\?\_\~\-\§\:\;\.\]]{5}/', $str);        
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

        $pw->addCriteria(new Criterias\Digit(), new Occurences\Strict(10));

        $str = $pw->generate();

        $this->assertNotEmpty($str);

        $this->assertRegExp('/\d{10}/', $str);
    }    

    /** @test */
    public function strictOccurences()
    {
        $dictionary = ['a', 'b', 'c', 'd'];

        $strict = new Occurences\Strict(5);
        $result = $strict->parse($dictionary);

        $this->assertTrue(is_array($result));
        $this->assertEquals(5, count($result));
        $this->assertContains($result[0], $dictionary);
        $this->assertContains($result[1], $dictionary);
        $this->assertContains($result[2], $dictionary);
        $this->assertContains($result[3], $dictionary);
    }

    /** @test */
    public function betweenOccurences()
    {
        $dictionary = ['a', 'b', 'c', 'd'];

        $strict = new Occurences\Between(3, 5);
        $result = $strict->parse($dictionary);

        $this->assertTrue(is_array($result));
        $this->assertTrue(count($result) >= 3);
        $this->assertTrue(count($result) <= 5);
        $this->assertContains($result[0], $dictionary);
        $this->assertContains($result[1], $dictionary);
        $this->assertContains($result[2], $dictionary);
    }
}

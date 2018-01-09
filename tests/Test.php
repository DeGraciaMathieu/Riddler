<?php

use DeGraciaMathieu\Riddler\Password;
use DeGraciaMathieu\Riddler\Criterias;
use DeGraciaMathieu\Riddler\Occurences;

class Test extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function example()
    {
        return $this->assertTrue(true);
    }

    /** @test */
    public function emptyPassword()
    {
        $pw = new Password();

        $str = $pw->generate();

        $this->assertEmpty($str);
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
}

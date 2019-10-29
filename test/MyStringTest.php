<?php
namespace Braddle;

use PHPUnit\Framework\TestCase;

class MyStringTest extends TestCase
{
    public function testName()
    {
        $mark = new MyString("mark");
        $expected = "MARK";

        $actual = $mark->toUpperCase();

        $this->assertEquals($expected, $actual);
    }
}

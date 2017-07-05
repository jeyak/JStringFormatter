<?php

namespace Tests\JStringFormatter;

use Libs\JStringFormatter;
use PHPUnit\Framework\TestCase;

class JStringFormatterTest extends TestCase {
    /**
     * test concat
     */
    public function testConcat()
    {
        $str1 = "Hello";
        $str2 = "World";
        $this->assertSame('HelloWorld', JStringFormatter::concat($str1, $str2));
    }

    /**
     * test ToCamelCase
     */
    public function testToCamelCase()
    {
        $str1 = "hello";
        $str2 = "world";
        $this->assertSame('HelloWorld', JStringFormatter::toCamelCase($str1, $str2));
    }
}
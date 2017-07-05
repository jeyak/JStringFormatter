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

    /**
     * test Prefix
     */
    public function testPrefix()
    {
        $str1 = "hello";
        $str2 = "world";
        $this->assertSame('helloworld', JStringFormatter::prefix($str1, $str2));
        $this->assertSame('helloworld', JStringFormatter::prefix($str1, $str2, false));
        $this->assertSame('HelloWorld', JStringFormatter::prefix($str1, $str2, true));
        $this->assertSame('WorldHello', JStringFormatter::prefix($str2, $str1, true));
    }
}
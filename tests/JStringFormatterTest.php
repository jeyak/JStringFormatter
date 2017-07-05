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
}
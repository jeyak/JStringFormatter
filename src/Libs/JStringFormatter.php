<?php

namespace Libs;

class JStringFormatter {
    /*
    Concat
    */
    public static function concat(String $str1, String $str2) {
        return $str1.$str2;
    }

    /*
    toCamelCase
    */
    public static function toCamelCase(String $str1, String $str2)
    {
        return ucfirst($str1).ucfirst($str2);
    }
}
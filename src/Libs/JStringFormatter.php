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

    /*
    prefix
    */
    public static function prefix(String $str1, String $str2, $toCamelCase = false)
    {
        if($toCamelCase) {
            return JStringFormatter::toCamelCase($str1, $str2);
        }
        return JStringFormatter::concat($str1, $str2);
    }

    /*
    suffix
    */
    public static function suffix(String $str1, String $str2, $toCamelCase = false)
    {
        return JStringFormatter::prefix($str2, $str1, $toCamelCase);
    }
}
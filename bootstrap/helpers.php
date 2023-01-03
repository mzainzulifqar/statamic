<?php
/**
 * ========================================= COMMON HELPERS =========================================
 */

 function everything_in_tags($string, $start,$end)
{
    $string = " ".$string;
    $ini = strpos($string, $start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return trim(substr($string, $ini, $len));
}


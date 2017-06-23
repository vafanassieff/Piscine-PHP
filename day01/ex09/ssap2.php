#!/usr/bin/php
<?php

function ft_split($str)
{
    $ret = explode(" ", $str);
    $ret = array_diff($ret, array(''));
    return $ret;
}

function get_sort_val($c) 
{
    $tab = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $size = strlen($tab);
    $i = 0;
    while ($i < $size) 
    {
        if ($c == $tab[$i])
            return ($i);
        $i++;
     }
    return (0);
}
function callback($str1, $str2) 
{
    $str1 = strtolower($str1);
    $str2 = strtolower($str2);
    $i = 0;
    $size = strlen($str1);
    while ($i < $size)
    {
        $val1 = get_sort_val($str1[$i]);
        $val2 = get_sort_val($str2[$i]);
        if ($val1 != $val2)
            return ($val1 - $val2);
        $i++;
    }
    return(0);
}

    $count = 1;
    while ($count < $argc)
    {
        $list = $list.$argv[$count]." ";
        $count++;
    }
    $array = ft_split($list);
    usort($array, 'callback');
    foreach($array as $elem) 
        echo("$elem\n");
?>
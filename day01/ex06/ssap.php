#!/usr/bin/php
<?PHP
function ft_split($str)
{
    $ret = explode(" ", $str);
    $ret = array_diff($ret, array(''));
    sort($ret);
    return $ret;
}

function epur_str($string)
{
    while (strpos($string, '  ') !== false)
        $string = str_replace('  ', ' ',  $string);
    $string = rtrim($string);
    $string = ltrim($string);
    return $string;
}
    $count = 1;
    while ($count < $argc)
    {
        $string = $string.$argv[$count]." ";
        $count++;
    }
    $string = epur_str($string);
    $string = ft_split($string);
    foreach($string as $elem)
        printf("$elem\n");
?>
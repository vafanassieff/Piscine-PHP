#!/usr/bin/php
<?PHP
    $string = $argv[1];
    while (strpos($string, '  ') !== false)
        $string = str_replace('  ', ' ',  $string);
    $string = rtrim($string);
    $string = ltrim($string);
    $array = explode(" ", $string);
    $first = array_shift($array);
    foreach($array as $elem)
       echo ("$elem ");
   echo ("$first\n");
?>
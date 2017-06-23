#!/usr/bin/php
<?PHP
if ($argc == 2)
{
    $string = $argv[1];
    while (strpos($string, '  ') !== false)
        $string = str_replace('  ', ' ',  $string);
    $string = rtrim($string);
    $string = ltrim($string);
    if ($string != FALSE)
        printf("$string\n");
}
?>
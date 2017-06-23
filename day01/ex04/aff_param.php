#!/usr/bin/php
<?PHP
    $count = 1;
    while ($count < $argc)
    {
        printf("$argv[$count]\n");
        $count++;
    }
?>
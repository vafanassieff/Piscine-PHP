#!/usr/bin/php
<?php
    if ($argc != 2)
	    echo "Incorrect Parameters\n";
    else
    {
    $array = sscanf($argv[1], "%d %c  %d %s");
    if ($array[0] && $array[1] && $array[2] && $array[3] == NULL)
    {
	    if($array[1] == '*')
		    $result = $array[0] * $array[2];
	    if($array[1] == '-')
		    $result = $array[0] - $array[2];
	    if($array[1] == '/' && $array[2] != 0)
		    $result = $array[0] / $array[2];
	    if($array[1] == '%')
		    $result = $array[0] % $array[2];
	    if($array[1] == '+')
		    $result = $array[0] + $array[2];
	    echo ("$result\n");
    }
else
    echo "Syntax Error\n";

}
?>
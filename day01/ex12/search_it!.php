#!/usr/bin/php
<?php
	foreach ($argv as $elem)
    {
        $val = explode(':', $elem);
        $key = $val[0];
        $value = $val[1];
		if ($key == $argv[1])
			$result = $value;
	}
	echo $result;
	if (is_null($result) == FALSE)
		echo "\n";
?>
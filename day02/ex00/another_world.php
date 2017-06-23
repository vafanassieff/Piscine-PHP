#!/usr/bin/php
<?PHP

$str = $argv[1];
$str = preg_replace('/[\t ]+/',' ', $str);
$str = preg_replace('/^[\t ]/','', $str);
$str = preg_replace('/[\t ]$/', '', $str);
if (!(empty($str)))
	echo "$str\n";

?>
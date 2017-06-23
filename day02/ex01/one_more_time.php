#!/usr/bin/php
<?PHP
function wrong()
{
	echo "Wrong Format\n";
	exit;
}
date_default_timezone_set('Europe/Paris');

if (empty($argv[1]))
	exit;

$array = explode(' ',$argv[1]);
$good_month = array(1 => 'janvier', 2 => 'février', 3 => 'mars', 4 => 'avril', 5 => 'mai', 6 => 'juin', 7 => 'juillet', 8 => 'août', 9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'décembre');

if (count($array) != 5)
	wrong();
$nb = preg_match('/[L|l]undi|[M|m]ardi|[M|m]ercredi|[J|j]eudi|[V|v]endredi|[S|s]amedi|[D|d]imanche/', $array[0]);
if (!$nb)
	wrong();
$len = strlen( $array[1]);
if ($len > 2)
	wrong();
if ($len == 1)
{
	$nb = preg_match('/^[1-9]/', $array[1]);
	if (!$nb)
		wrong();
	$day = $array[1];
}
if ($len == 2)
{
	$nb = preg_match('/^0[1-9]|1[0-9]|2[0-9]|3[0-1]/', $array[1]);
	if (!$nb)
		wrong();
	$day = $array[1];
}

$nb = preg_match('/[Jj]anvier|[F|f]évrier|[M|m]ars|[A|a]vril|[M|m]ai|[J|j]uin|[J|j]uillet|[A|a]oût|[S|s]eptembre|[O|o]ctobre|[N|n]ovembre|[D|d]écembre/', $array[2]);
if (!$nb)
	wrong();

$month = strtolower($array[2]);
$month = array_search($month , $good_month);
$nb = preg_match('/^(19[7-9]\d|20[0-4]\d|2050)$/', $array[3]);
if (!$nb)
	wrong();
$year = $array[3];

$time = explode(':', $array[4]);
if (count($time) != 3)
	wrong();

$nb = preg_match('/0[0-9]|1[0-9]|2[0-3]/', $time[0]);
if (!$nb)
	wrong();
$hour = $time[0];

$nb = preg_match('/0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9]/', $time[1]);
if (!$nb)
	wrong();
$minute = $time[1];

$nb = preg_match('/0[0-9]|1[0-9]|2[0-9]|3[0-9]|4[0-9]|5[0-9]/', $time[2]);
if (!$nb)
	wrong();
$second = $time[2];
$time = mktime($hour, $minute, $second, $month, $day ,$year + 1);
echo ("$time\n");
?>
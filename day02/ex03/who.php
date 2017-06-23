#!/usr/bin/php
<?PHP
date_default_timezone_set('Europe/Paris');
$file = file_get_contents("/var/run/utmpx");
$utmpx = substr($file, 1256);
while ($utmpx != NULL)
{
	$unpacked = unpack('a256user/a4id/a32line/ipid/itype/I2time/', $utmpx);
	if ($unpacked["type"] == 7)
		$user[$unpacked["line"]] = array("user" => $unpacked["user"], "time" => $unpacked["time1"]);
	$utmpx = substr($utmpx, 628);	
}
ksort($user);
foreach($user as $line => $elem)
{
	printf("% -7s % -7s  %s \n", $elem["user"], $line, date("M  j H:i", $elem["time"]));
}
?>
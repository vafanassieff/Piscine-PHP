#!/usr/bin/php
<?PHP

function toupper($matches)
{
    return strtoupper($matches[0]);
}
function find_link($matches)
{
	$title = '/(?<=title=")(?:.|\n)*"/iU';
    $link = '/>(?!<.*>)(?:.|\n)*</iU';
    $matches = preg_replace_callback($link, 'toupper', $matches);
	$matches = preg_replace_callback($title, 'toupper', $matches);
    return $matches[0];
}
if ($argc == 2)
{
	$a_tag = '/<a href(?:.|\n)*<\/a>|/iU';
    $file = file_get_contents($argv[1]);
    $file = preg_replace_callback($a_tag, 'find_link', $file);
    print($file);
}
?>
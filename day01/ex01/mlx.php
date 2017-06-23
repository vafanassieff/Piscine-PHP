#!/usr/bin/php
<?PHP

$counter_x = 0;
$counter_nl = 0;

while ($counter_x < 1000)
{
    if ($counter_nl == 100)
    {
        echo "\n";
        $counter_nl = 0;
    }
    echo "X";
    $counter_x++;
    $counter_nl++;
}
echo "\n";
?>
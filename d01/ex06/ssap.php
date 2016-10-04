#!/usr/bin/php
<?PHP

$i = 1;
while ($i < $argc)
	$big_array .= $argv[$i++]." ";

$tab_array = explode(" ", $big_array);
sort($tab_array);

$i = 0;
while (isset($tab_array[$i]))
{
	if ($tab_array[$i] != NULL)
		echo ($tab_array[$i]."\n");
	$i++;
}

?>

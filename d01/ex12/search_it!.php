#!/usr/bin/php
<?PHP

if ($argc < 3)
	return ;

$my_key = $argv[1];
$my_value = "";

$i = 2;
while ($i < $argc)
	$my_array[] = $argv[$i++]; 

foreach ($my_array as $key => $value)
{
	$tmp = explode(":", $value);
	if ($my_key == $tmp[0] && $tmp[1])
		$my_value = $tmp[1]."\n";
}
if ($my_value)
	echo $my_value;

?>

#!/usr/bin/php
<?PHP

if ($argc == 4 && is_numeric($argv[1]) && is_numeric($argv[3]))
{
	$signe = trim($argv[2]);
	if ($signe == '+')
		echo $argv[1] + $argv[3];
	else if ($signe == '-')
		echo $argv[1] - $argv[3];
	else if ($signe == '*')
		echo $argv[1] * $argv[3];
	else if ($signe == '%')
		echo $argv[1] % $argv[3];
	else if ($signe == '/')
		echo $argv[1] / $argv[3];
	else
		echo "Incorrect Parameters\n";
}
else
	echo "Incorrect Parameters\n";
?>

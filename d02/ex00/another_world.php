#!/usr/bin/php
<?PHP

if ($argv[1])
{
	$new_argv = trim($argv[1]);
	$tab = preg_replace('/\s+/', " ", $new_argv);
	echo $tab."\n";
}

?>

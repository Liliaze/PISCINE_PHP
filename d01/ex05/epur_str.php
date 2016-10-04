#!/usr/bin/php
<?PHP

if ($argv[1])
{
	$tab_argv = explode(" ", (trim($argv[1]. " ")));
	foreach ($tab_argv as $key => $value)
	{
		if ($value != null)
		{
			if ($key == 0)		
				$new_array .= $value;
			else
				$new_array .= " "."$value";
		}
	}
	if ($new_array)
		echo "$new_array"."\n";
}

?>

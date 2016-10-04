#!/usr/bin/php
<?PHP

function ssap_tab($arg, $nb)
{
	$i = 1;
	while ($i < $nb)
		$big_array .= $arg[$i++]." ";
	if ($big_array)
	{
		$tab_array = explode(" ", $big_array);
		//	sort($tab_array);

		$i = 0;
		while (isset($tab_array[$i]))
		{
			if ($tab_array[$i] != NULL)
				$tab[] = $tab_array[$i];
			$i++;
		}
		if ($tab)
		{
			$array_lowercase = array_map('strtolower', $tab);
			array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $tab);
		}
		return $tab;
	}
}

function print_alpha($tab)
{
	foreach ($tab as $value)
		if ($value <= 'Z' && $value >= 'A' ||
			$value <= 'z' && $value >= 'a')
			echo $value."\n";
}

function print_numeric($tab)
{
	foreach ($tab as $value)
		if ((is_numeric($value)))
			echo $value."\n";
}

function print_other($tab)
{
	foreach ($tab as $value)
	{
		if (!($value <= 'Z' && $value >= 'A' ||
			$value <= 'z' && $value >= 'a') && !(is_numeric($value)))
			echo $value."\n";
	}
}

if ($argc > 1)
{
	$tab = ssap_tab($argv, $argc);
	if ($tab)
	{
		print_alpha($tab);
		print_numeric($tab);
		print_other($tab);
	}
}

?>

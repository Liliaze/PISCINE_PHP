#!/usr/bin/php
<?PHP

function ft_epur_and_rot_str($input)
{
	$i = 0;
	$first = 1;
	$new_array = NULL;

	$tab = explode(" ", $input);
	while (isset($tab[$i]))
	{
		if ($tab[$i] != NULL)
		{
			if ($first)
			{
				$first = 0;
				$tmp = $tab[$i];
			}
			else
				$new_array .= $tab[$i]." ";
		}
		$i++;
	}
	if (!$first)
		$new_array .= $tmp;
	return ($new_array);
}

if ($argv[1])
{
	$array = ft_epur_and_rot_str($argv[1]);
	if ($array)
		echo ($array."\n");
}

?>

<?PHP

function ft_is_sort($input)
{
	if ($input)
	{
		$i = 0;

		$cpy = $input;
		sort($cpy);
		while (isset($cpy[$i]))
		{
			if ($cpy[$i] !== $input[$i])
			{
				return (FALSE);
			}
			$i++;
		}
		return (TRUE);
	}
}

?>

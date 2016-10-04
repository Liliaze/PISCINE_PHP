<?PHP
function ft_split($input)
{
	$keywords = explode(" ", $input);
	$i = 0;
	while (isset($keywords[$i]))
	{
		if ($keywords[$i] == NULL)
			unset($keywords[$i]);
		$i++;
	}
	sort($keywords);
	return ($keywords);
}
?>

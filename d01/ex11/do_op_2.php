#!/usr/bin/php
<?PHP

function ft_clean_str($input)
{
	if ($input)
	{
		$tab_argv = explode(" ", (trim($input. " ")));
		foreach ($tab_argv as $value)
		{
			if ($value != null)
					$new_str .= "$value";
		}
		if ($new_str)
			return ($new_str);
	}
}

function multiexplode($delimiters, $string)
{
	$ready = str_replace($delimiters, $delimiters[0], $string);
	return explode($delimiters[0], $ready, 2);
}

function do_op_2($nbr, $op)
{
	if (count($nbr == 2) && count($op) == 1 &&
		is_numeric($nbr[0]) && is_numeric($nbr[1]))
	{
		if ($op[0] == '+')
			echo $nbr[0] + $nbr[1];
		else if ($op[0] == '-')
			echo $nbr[0] - $nbr[1];
		else if ($op[0] == '*')
			echo $nbr[0] * $nbr[1];
		else if ($op[0] == '%')
			echo $nbr[0] % $nbr[1];
		else if ($op[0] == '/')
			echo $nbr[0] / $nbr[1];
		else
			echo "Syntax Error\n";
		echo "\n";
	}
	else
		echo "Syntax Error\n";
}

if ($argc == 2)
{
	$str = ft_clean_str($argv[1]);
	$nb = multiexplode(array("/","*","-","+","%"), $str);
	$sign = str_word_count($str, 1, '+-/*%');
	do_op_2($nb, $sign);
}
else
	echo "Incorrect Parameters\n";

?>

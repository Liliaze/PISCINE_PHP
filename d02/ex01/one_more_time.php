#!/usr/bin/php
<?PHP

function	check_day($jour)
{
	$jour = strtolower($jour);
	$tab_day_fr = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
	$i = 0;
	while ($tab_day_fr[$i])
	{
		if ($tab_day_fr[$i] === $jour)
			return (1);
		$i++;
	}
	return (0);
}

function	reverso_month($mois)
{
	$mois = strtolower($mois);
	$tab_mois_fr = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
	$tab_mois_en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
	$i = 0;
	while ($tab_mois_fr[$i])
	{
		if ($tab_mois_fr[$i] === $mois)
			return ($tab_mois_en[$i]);
		$i++;
	}
	return (0);
}

function	display_error()
{
	echo "Wrong Format\n";
	exit(1);
}

if ($argv[1])
{
	if (preg_match("/^[A-Za-z]{1}[a-z]{4,7} \d{1,2} [A-Za-z]{1}[a-z]{2,8} \d{4} (\d{2}:){2}\d{2}$/", $argv[1]) === 1)
	{
		date_default_timezone_set("Europe/Amsterdam");
		$tab = explode(" ", $argv[1]);
		if ((check_day($tab[0])) === 0 || ($tab[2] = reverso_month($tab[2])) === 0)
			display_error();
		$new_date = $tab[1]."-".$tab[2]."-".$tab[3]." ".$tab[4];
		if (($stamp = strtotime($new_date)) != FALSE)
		{
			if (($return = checkdate(date('m', $stamp), date('d', $stamp), date('Y', $stamp))) !== FALSE)
				echo $stamp."\n";
		}
		else
			display_error();
	}
	else
		display_error();
}

?>

#!/usr/bin/php
<?php

//THIS FUNCTION IS NOT FINISH//

if ($argc != 3)
	return ;

$file = $argv[1];
if (file_exists($file))
	$tab_content = file($file, FILE_SKIP_EMPTY_LINES);
else
	return ;
if (count($tab_content) < 2)
{
	echo "pas assez de donnee dans le fichier\n";
	return ;
}
$tab_key_in_file = explode(";",$tab_content[0]);
$key = $argv[2];
if (!(preg_match("/\b$key\b/", $tab_content[0])))
	return ;
else
{
	$nb_key = 0;
	while ($tab_key_in_file[$nb_key])
	{
		if ($key == $tab_key_in_file[$nb_key])
			break;
		$nb_key++;
	} //on recupere l'index de la colonne de la key recherche
}
echo "Entrez votre commande: ";

//PARSING DONNEE OK//

while ($shell = fgets(STDIN))
{
	$shell = rtrim($shell, "\n");
	if (preg_match("/\brm\b|\bcp\b|\bmv\b/", $shell))
	{
		echo "please don't try rm, cp or mv\n";
		return ;
	}
	if (preg_match("/\becho\b|\bprint_r\b|\bvar_dump\b/", $shell))
	{
		echo "vous avez demande : ".$shell.".\n";
		$shell = str_replace("$", "@@", $shell);
		if (preg_match_all("/@@[a-zA-Z\s]+\['[a-zA-Z\s]+']/", $shell, $matches))
		{
			echo "match = ";
			print_r($matches);
			echo ".\n";
			$name = preg_replace("/@@[a-zA-Z\s]+\['/", "", $matches);
			$name = preg_replace("/'\].*/", "", $name);
			$champs = preg_replace("/\[.*/", "", $matches);
			$champs = preg_replace("@@", "", $champs);
			/*
			foreach ($tab_content as $line)
			{
				$tab = explode(";", $line);
				$i = 0;
				while ($line[$i])
				{
					$(key($line[$i])) = $tab_key_in_file
			
				$nb_champs = 0;
				while ($tab_key_in_file[$nb_champs])
				{
					if ($ch == $tab_key_in_file[$nb_champs])
						break;
					$nb_champs++;
				} //on recupere l'index de la colonne du champs demande
				$i = 0;
				while ($tab_content[$i])
				{
					$tab = explode(";", $tab_content[$i]);
					if ($na == $tab[$nb_key]));
					{
						$($ch) = $tab[$nb_champs];
						print_r ($($ch));
					}
					$i++;
				}
				}*/
		}
		echo "Entrez votre commande: ";
	}
	echo "\n";

?>

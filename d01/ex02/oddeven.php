#!/usr/bin/php
<?PHP

print("Entrez un nombre: ");
while($your_nb = fgets(STDIN))
{
	$your_nb = rtrim($your_nb, "\n");
	if ((is_numeric($your_nb)))
	{
		if (($your_nb % 2))
			echo "Le chiffre {$your_nb} est Impair\n";
		else
			echo "Le chiffre {$your_nb} est Pair\n";
	}
	else
		echo "'{$your_nb}' n'est pas un chiffre\n";
	print("Entrez un nombre: ");
}
echo "\n";
?>

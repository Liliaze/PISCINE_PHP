#!/usr/bin/php
<?PHP

if ($argc != 2)
	return ;
$file = 'save_sing_it.php';
if (file_exists($file))
	$tab = file($file);
else
{
	shell_exec('touch save_sing_it.php');
	if (file_exists($file))
		$tab = file($file);
}
$my_count = count($tab);
if ($argv[1] == "mais pourquoi cette demo ?")
	echo "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n";
else if ($argv[1] == "mais pourquoi cette chanson ?")
	echo "Parce que Kwame a des enfants\n";
else if ($argv[1] == "vraiment ?" && $my_count == 0)
{
	echo "Nan c'est parce que c'est le premier avril\n";
	shell_exec('echo 1 > save_sing_it.php');
}
else if ($argv[1] == "vraiment ?" && $my_count == 1)
{
	echo "Oui il a vraiment des enfants\n";
	shell_exec('echo 1 >> save_sing_it.php');
}
else if ($argv[1] == "vraiment ?" && $my_count > 1)
{
	echo "Je crois que c'est bon pour les tests maintenant, merci\n";
	shell_exec('rm save_sing_it.php');
}

?>

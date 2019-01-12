#!/usr/bin/php
<?php
while(!feof(STDIN))
{
	echo"Entrez un nombre: ";
	$line = fgets(STDIN);
	$i = strlen($line);
	$n_line = substr($line, 0, $i - 1);

	if(!feof(STDIN))
	{
		if (is_numeric($n_line))
		{
			$x = intval($line);
			echo"Le chiffre ".$x." est ";
			if ($x % 2 == 0)
				echo"Pair";
			else
				echo"Impair";
		}
		else 
			echo"'".$n_line."' n'est pas un chiffre";
	}
	echo"\n";
}
?>

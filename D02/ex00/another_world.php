#!/usr/bin/php
<?php
function ft_split($line, $sep)
{
	$ex = explode($sep, $line);
	$i = 0;
	$j = 0;
	while($i < count($ex))
	{
		if (strlen($ex[$i]) > 0)
		{
			$t[$j] = $ex[$i];
			$j++;
		}
		$i++;
	}
	return($t);
}

function ft_epur($line, $sep)
{
	$i = 1;
	$t = ft_split($line, $sep);
	$line = $t[0];
	while($i < count($t))
	{
		$line .= " ";
		$line .= $t[$i];
		$i++;
	}
	return ($line);
}

if (count($argv) > 1)
{
	$t = ft_epur($argv[1], "\t");
	$t = ft_epur($t, " ");
	echo $t . "\n";
}
?>

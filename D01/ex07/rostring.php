#!/usr/bin/php
<?php
function ft_split($line)
{
	$ex = explode(" ", $line);
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

if (count($argv) > 1)
{
	$a = ft_split($argv[1]);
	if (count($a) == 1)
		$line = $a[0] . "\n";
	else if (count($a) > 1)
	{
		$i = 1;
		while($i < count($a))
		{
			$line .= $a[$i] . " ";
			$i++;
		}
		$line .= $a[0] . "\n";
	}
	echo $line;
}	
?>

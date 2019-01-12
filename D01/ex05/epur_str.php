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

$i = 1;
$t = ft_split($argv[1]);
$line = $t[0];
while($i < count($t))
{
	$line .= " ";
	$line .= $t[$i];
	$i++;
}
echo $line;
if (count($t))
	echo"\n";
?>

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
	$i = 1;
	$k = 0;
	while($i < count($argv))
	{
		$temp = ft_split($argv[$i]);
		$j = 0;
		while($j < count($temp))
		{
			$t[$k] = $temp[$j];
			$k++;
			$j++;
		}
		$i++;
	}
	sort($t);
	$i = 0;
	while($i < $k)
	{
		echo $t[$i]."\n";
		$i++;
	}
}
?>

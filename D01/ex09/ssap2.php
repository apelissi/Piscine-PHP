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

function afficher($tab)
{
	$i = 0;
	while($i < count($tab))
	{
		echo $tab[$i] . "\n";
		$i++;
	}
}

if (count($argv) > 1)
{
	$i = 1;
	$i_a = 0;
	$i_n = 0;
	$i_o = 0;
	while($i < count($argv))
	{
		$temp = ft_split($argv[$i]);
		$j = 0;
		while($j < count($temp))
		{
			if (strcasecmp("z", substr($temp[$j], 0, 1)) < 26 
				&& strcasecmp("z", substr($temp[$j], 0, 1)) >= 0)
			{
				$alphas[$i_a] = $temp[$j];
				$i_a++;
			}
			elseif (strcasecmp("9", substr($temp[$j], 0, 1)) < 10 
				&& strcasecmp("9", substr($temp[$j], 0, 1)) >= 0)
			{
				$numbers[$i_n] = $temp[$j];
				$i_n++;
			}
			else
			{
				$others[$i_o] = $temp[$j];
				$i_o++;
			}
			$j++;
		}
		$i++;
	}
	if (count($alphas) > 0)
		usort($alphas, strcasecmp);
	if (count($numbers) > 0)
		usort($numbers, strcasecmp);
	if (count($others) > 0)
		usort($others, strcasecmp);
	afficher($alphas);
	afficher($numbers);
	afficher($others);
}
?>

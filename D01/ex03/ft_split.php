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
?>

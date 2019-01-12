<?php
function ft_is_sort($tab)
{
	$temp = $tab;
	sort($temp);
	$i = 0;
	while($i < count($tab) && $i != -1)
	{
		if (strpos($tab[$i], $temp[$i]) === false)
			$i = -2;
		$i++;
	}
	if ($i == count($tab))
		return true;
	else
		return false;
}
?>

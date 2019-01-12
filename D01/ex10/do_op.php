#!/usr/bin/php
<?php
	if (count($argv) != 4)
		echo "Incorrect Parameters\n";
	else
	{
		$op1 = intval($argv[1]);
		$op2 = intval($argv[3]);
		if (strpos($argv[2], "+") !== false)
			$res =  $op1 + $op2;
		elseif (strpos($argv[2], "-") !== false)
			$res =  $op1 - $op2;
		elseif (strpos($argv[2], "%") !== false)
			$res =  $op1 % $op2;
		elseif (strpos($argv[2], "*") !== false)
			$res =  $op1 * $op2;
		elseif (strpos($argv[2], "/") !== false)
			$res =  $op1 / $op2;
		echo $res . "\n";
	}
?>

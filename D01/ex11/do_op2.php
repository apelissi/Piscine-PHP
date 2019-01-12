#!/usr/bin/php
<?php

function ft_find_op($str)
{
	$i = 0;
	if (strpos($str, "+") !== false)
	{
		$op =  "+";
		$i++;
	}
	if (strpos($str, "-") !== false)
	{
		$op =  "-";
		$i++;
	}
	if (strpos($str, "%") !== false)
	{
		$op =  "%";
		$i++;
	}
	if (strpos($str, "*") !== false)
	{
		$op =  "*";
		$i++;
	}
	if (strpos($str, "/") !== false)
	{
		$op =  "/";
		$i++;
	}
	if ($i == 1)
		return ($op);
	else
		return(false);
}

function ft_test_op($str)
{
	$i = 0;
	while(substr($str, $i, 1) == " ")
		$i++;
	while(strcmp(9, substr($str, $i, 1)) <= 9 && strcmp(9, substr($str, $i, 1)) >= 0 && $i < strlen($str))
		$i++;
	while(substr($str, $i, 1) == " ")
		$i++;
	if ($i == strlen($str) && strlen($str) > 0)
		return (true);
	else
		return (false);
}


if (count($argv) != 2)
	echo "Incorrect Parameters\n";
else
{
	$op = ft_find_op($argv[1]);
	if ($op == false)
		echo "Syntax Error\n";
	else
	{
		$op1 = substr($argv[1], 0, strpos($argv[1], $op));
		$op2 = substr($argv[1], strpos($argv[1], $op) + 1);
		if (!ft_test_op($op1) || !ft_test_op($op2))
			echo "Syntax Error\n";
		else
		{
			if (strpos($op, "+") !== false)
				$res =  $op1 + $op2;
			elseif (strpos($op, "-") !== false)
				$res =  $op1 - $op2;
			elseif (strpos($op, "%") !== false)
				$res =  $op1 % $op2;
			elseif (strpos($op, "*") !== false)
				$res =  $op1 * $op2;
			elseif (strpos($op, "/") !== false)
				$res =  $op1 / $op2;
			echo $res . "\n";
		}
	}
}
?>

#!/usr/bin/php
<?php

function	ft_month($str)
{
	if (strpos($str, "anvier") !== false)
		return "01";
	elseif (strpos($str, "vrier") !== false)
		return "02";
	elseif (strpos($str, "ars") !== false)
		return "03";
	elseif (strpos($str, "vril") !== false)
		return "04";
	elseif (strpos($str, "ai") !== false)
		return "05";
	elseif (strpos($str, "uin") !== false)
		return "06";
	elseif (strpos($str, "uillet") !== false)
		return "07";
	elseif (strpos($str, "out") !== false)
		return "08";
	elseif (strpos($str, "eptembre") !== false)
		return "09";
	elseif (strpos($str, "ctobre") !== false)
		return "10";
	elseif (strpos($str, "ovembre") !== false)
		return "11";
	elseif (strpos($str, "cembre") !== false)
		return "12";
	else
		return 0;
}

if (count($argv) > 1)
{
	date_default_timezone_set('Europe/Paris');
	$heure = substr($argv[1], -8);
	$year = substr($argv[1], -13, 4);
	$day = substr($argv[1], strpos($argv[1], " ") + 1, 2);
	if (strpos($day, " ") !== false)
	{
		$day = substr($day, 0, 1);
		$day = "0" . $day;
	}
	$month = ft_month($argv[1]);
	$s = $year . ":" . $month . ":" . $day . " " . $heure;
	$i = strtotime($s);
	if ($i === false)
		echo "Wrong Format\n";
	else
		echo "$i" . "\n";
}
?>

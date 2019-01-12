<?php
$i = 0;
foreach ($_GET as $elem => $value)
{
	if ($i == 0 && $elem == "action" && $value == "set"){
		$i = 1;}
	elseif ($i == 0 && $elem == "action" && $value == "get"){
		$i = 2;}
	elseif ($i == 0 && $elem == "action" && $value == "del"){
		$i = 3;}
	elseif ($elem == "name" && $value != NULL)
	{
		if ($i == 1)
		{
			$name = $value;
			$i = 4;
		}
		elseif ($i == 2 && $_COOKIE[$value] != NULL)
			echo ($_COOKIE[$value])."\n";
		elseif ($i == 3)
			setcookie($value, "", time() - 1);
		if ($i != 4)
			$i = 0;
	}
	elseif ($i == 4 && $elem == "value")
	{
		setcookie($name, $value, time() + 3600);
		$i = 0;
	}
	else
		$i = 0;
}
?>

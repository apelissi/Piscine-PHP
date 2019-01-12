<?php
function auth($login, $passwd)
{
	$modify = FALSE;
	$pw = hash("whirlpool", $passwd);
	if (!file_exists('../private/passwd'))
				file_put_contents('../private/passwd', null);
	$array = file_get_contents("../private/passwd");
	$test = unserialize($array);
	foreach ($test as $elem) 
		if ($elem['login'] === $login && $pw === $elem['passwd'])
			$modify = TRUE;
	if ($modify == FALSE)
		return (FALSE);
	else
		return (TRUE);
}

?>

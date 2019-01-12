#!/usr/bin/php
<?php

$fd = fopen($argv[1], "r");
$file = fread($fd, filesize($argv[1]));
$i = 0;
do
{
	$a = strpos($file, 'title="', $i);
	if ($a !== false)
	{
		$i = $a + 1;
		$f = strpos($file, '"', $a + 7);
		$old = substr($file, $a + 7, $f - ($a + 7));
		$new = strtoupper($old);
		$file = substr_replace($file, $new, $a + 7, strlen($new));
	}
} while($a !== false);

$file = preg_replace_callback(
	'#(<a[^>]*>)([^<]*)#',
	function ($matches) {
		return $matches[1] . strtoupper($matches[2]);
	},
	$file);
echo $file;
?>

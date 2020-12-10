#!/usr/bin/php
<?PHP
	if ($argc == 1)
		exit();
	for ($i = 1; $i < $argc; $i++) {
		$wow = preg_split("/ +/", trim($argv[$i]));
		$result = array_merge((array)$result, (array)$wow);
	}
	sort($result);
	print_r(implode("\n", $result));
	echo "\n";
?>

#!/usr/bin/php
<?PHP
	if ($argc > 1)
	{
		$wow = preg_split("/ +/", trim($argv[1]));
		print_r(implode(" ", $wow));
		print("\n");
	}
?>

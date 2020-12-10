#!/usr/bin/php
<?PHP
	if ($argc == 1)
		exit();
	for ($i = 1; $i < $argc; $i++)
	{
		$wow = preg_split("/ +/", trim($argv[$i]));
		$all_str = array_merge((array)$all_str, (array)$wow);
	}
	$sorted = array();
	function ft_sort($a, $b)
	{
		$line = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		for ($i = 0; (($i < strlen($a)) || ($i < strlen($b))) ; $i++)
		{
			$first = stripos($line, $a[$i]);
			$second = stripos($line, $b[$i]);
			if ($first > $second)
				return (1);
			else if ($first < $second)
				return (-1);
		}
	}
	usort($all_str, 'ft_sort');
	foreach($all_str as $key => $value) {
			array_push($sorted, $value);
		}
	print_r(implode("\n", $sorted));
	echo "\n";
?>

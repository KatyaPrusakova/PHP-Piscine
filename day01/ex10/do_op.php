#!/usr/bin/php
<?PHP

if ($argc == 4)
{
	$sign = trim($argv[2]);
	$a = trim($argv[1]);
	$b = trim($argv[3]);
	if ($sign == '+')
		$ret = ($a + $b);
	else if ($sign == '-')
		$ret = $a - $b;
	else if ($sign == '*')
		$ret = ($a * $b);
	else if ($sign == '%')
		$ret = ($a % $b);
	else if ($sign == '/')
		$ret = $a / $b;
	echo "$ret\n";
}
else
	print("Incorrect Parameters\n");
?>

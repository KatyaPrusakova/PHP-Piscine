#!/usr/bin/php
<?PHP

if ($argc == 2)
{
	$str= preg_split("/ +/", $argv[1]);
	if (strpos($myString, " ") == false)
		$str= preg_split("/([\%\/\*\-\+])/", $argv[1], -1, PREG_SPLIT_DELIM_CAPTURE );
	$a = trim($str[0]);
	$sign = trim($str[1]);
	$b = trim($str[2]);
	if (!is_numeric($a) || !is_numeric($b))
	{
		print("Syntax Error\n");
		exit();
	}
	if ($sign == '+')
		$ret = ($a + $b);
	else if ($sign == '-')
		$ret = ($a - $b);
	else if ($sign == '*')
		$ret = ($a * $b);
	else if ($sign == '%')
		$ret = ($a % $b);
	else if ($sign == '/')
		$ret = ($a / $b);
	print("$ret\n");
}
else
	print("Syntax Error\n");
?>

#!/usr/bin/php
<?PHP
	$i = 1;
	if ($argc > 1)
	{
		while ($argc-- > 1)
		{
			echo "$argv[$i]\n";
			$i++;
		}
	}
	else
		exit();
?>

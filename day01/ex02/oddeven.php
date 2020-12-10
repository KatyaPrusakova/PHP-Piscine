#!/usr/bin/env php
<?php

while(1)
	{
		echo "Enter a number: ";
		$n = trim(fgets(STDIN));
		if (feof(STDIN))
		{
			print("\n");
			exit();
		}
		if (is_numeric($n))
		{
			if ($n % 2)
				echo "The number $n is odd\n";
			else
				echo "The number $n is even\n";
		}
		else
			echo "'$n' is not a number\n";
	}
?>

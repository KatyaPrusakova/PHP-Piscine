#!/usr/bin/env php
<?php
	function time_it_right($date, $format) {
		if (!$d = strptime($date, $format))
		{
			print ("Wrong Format\n");
			exit();
		}
			echo mktime( $d['tm_hour'], $d['tm_min'], $d['tm_sec'],
			$d['tm_mon'] +1, $d['tm_mday'], $d['tm_year'] + 1900);
		}

	if ($argc == 2) {
		setlocale(LC_ALL,"fr_FR");
		date_default_timezone_set('Europe/Paris');
		$format = '%A %d %B %Y %H:%M:%S';
		$result = time_it_right($argv[1], $format);

	}
?>

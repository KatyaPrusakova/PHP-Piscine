#!/usr/bin/env php
<?php
	if ($argc > 1)
	{
		$ret = trim(preg_replace("/[\t]+/", " ", $argv[1]));
		$ret = trim(preg_replace("/[\s]+/", " ", $ret));
		print($ret);
	}
?>

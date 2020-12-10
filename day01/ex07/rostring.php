#!/usr/bin/php
<?PHP
		$all_words = preg_split("/ +/", $argv[1]);
		$first = $all_words[0];
		unset($all_words[0]);
		$result = array_merge((array)$all_words, (array)$first);
		print_r($result);

		print("\n");
?>

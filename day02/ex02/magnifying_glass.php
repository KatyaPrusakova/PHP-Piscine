#!/usr/bin/env php
<?php
	function upp_links($match) {
		$result = $match[0];
        $result = preg_replace_callback("/title=\"(.*?)\"/is", 
        function ($text) { 
            return "title=\"".strtoupper($text[1])."\""; }, 
            $result);
		$result = preg_replace_callback("/>.+?</s", function ($text) {
             return strtoupper($text[0]); },
              $result);
		return $result;
	}
	if($argc == 2 && file_exists($argv[1])) {
		$page = file_get_contents($argv[1]);
		$page = preg_replace_callback("/<a.*?<\/a>/is", "upp_links", $page);
		echo $page;
	}
?>
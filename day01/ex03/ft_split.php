<?PHP
function ft_split($str){

	$wow = preg_split("/ +/", trim($str));
	sort($wow);
	return ($wow);
}

?>

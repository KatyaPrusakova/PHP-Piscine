#!/usr/bin/php
<?PHP
function ft_is_sort($tab){
	$copy = $tab;
	sort($tab);
	if ($copy == $tab)
		return(1);
	else
		return(0);
}
?>

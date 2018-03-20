<?php

$a = 10;

function trocaValor(&$abc){
	$abc += 50;
	
	return $abc;
}

echo trocaValor($a);
echo '<br>';
echo $a;

?>
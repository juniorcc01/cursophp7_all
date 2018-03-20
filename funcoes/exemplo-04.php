<?php

function ola(){
	
	$argumentos = func_get_args();
	return $argumentos;
}

var_dump(ola("Olá mundo!",10));


?>
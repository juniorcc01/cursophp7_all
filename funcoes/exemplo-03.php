<?php

function ola($texto="mundo", $periodo="bom dia"){
	
	return "olá $texto! $periodo";
	
}

echo ola();
echo ola("");
echo ola("junior","boa Tarde");

?>
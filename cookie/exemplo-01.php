<?php

$data = array(
	"empresa"=>"Hcode Treinamento",
	"aluno"=>"claudio Junior");

setcookie("NOME_DO_COOKIE", json_encode($data), time()+3600);

echo "OK";


?>
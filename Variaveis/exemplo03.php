<?php

$nome = "junior";
$site = 'www.geosonda.com.br';

$ano = 1990;
$salario = 1000.99;
$bloqueado = false;
/////////////////////////////
$frutas = array("abacaxi","laranja","Melancia");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("exemplo03.php","r");

var_dump($arquivo);


?>
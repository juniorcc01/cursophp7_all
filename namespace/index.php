<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Claudio Junior");
$cad->setEmail("claudio.junior@geosonda.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>
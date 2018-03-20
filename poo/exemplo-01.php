<?php

class Pessoa {
	
	public $nome;//Atributo
	
	public function falar(){

		return "O meu nome é: " .$this->nome; 

		}
	
}

$junior = new Pessoa();

$junior->nome="Claudio Junior";

echo $junior->falar();
?>
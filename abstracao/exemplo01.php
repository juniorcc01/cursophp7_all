<?php

interface Veiculo{
	
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);	
}

abstract class automovel implements Veiculo{

		public function acelerar($velocidade){
			echo "o veiculo acelerou até " . $velocidade;
		}
		
		public function frenar($velocidade){
			echo "o veiculo frenou até " . $velocidade;
		}
		
		public function trocarMarcha($marcha){
			echo "o veiculo engatou a marcha ". $marcha;
		}
	
}

class DelRey extends automovel {
	
	public function empurrar()
	{
	}
		
}

$carro = new DelRey();

$carro->acelerar(200);


?>
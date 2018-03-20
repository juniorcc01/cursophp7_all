<?php

class Animal {
	
	public function falar(){
		return "som";
	}
	
	public function mover(){
			return "anda";
	}
}

class Cachorro extends Animal {
	
	public function falar(){
			return "late";
	}
	
}

class Gato extends Animal{
	
	public function falar(){
		return "mia";
	}
	
}

class Passaro extends Animal{

	public function falar(){
		return "canta";
	}
	
	public function mover(){
			return  "Voa" ." e " . parent::mover();
	}
	
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>"."<br>";

$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>"."<br>";

$PiuPiu = new Passaro();
echo $PiuPiu->falar() . "<br>";
echo $PiuPiu->mover() . "<br>"."<br>";

?>
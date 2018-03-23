<?php

function trataNome($name){

	if(!$name){
		throw new Exception("Nenhum nome foi informado",1);
	}	
	
	echo ucfirst($name)."<br>";
}

try{
	trataNome("junior");
	trataNome("");

	}catch(Exception $e) {
		echo $e->getMessage()."<br>";

	} finally {
		echo "executou o try";
		
	}

?>



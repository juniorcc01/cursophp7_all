<?php
$nome = "junior";
function teste() {
	
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "joao";
	echo $nome."agora no teste 2";
	
	
}

teste();
teste2();
?>
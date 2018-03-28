<?php

$id = (isset($_GET["id"]))?$_GET["id"]:1;

if(!is_numeric($id) || strlen($id > 5)){
	exit("pegamos você");
}	

$conn = mysqli_connect("localhost","root","","dbphp7");

$sql = "SELECT * from tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn,$sql);

while($resultado = mysqli_fetch_object($exec)){
	
	//echo $resultado->deslogin ."<br>";
	var_dump($resultado);
}

?>
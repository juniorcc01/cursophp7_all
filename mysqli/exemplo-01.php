<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
	echo "Error: ". $connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) values(?,?)");

$stmt->bind_param("ss",$login,$pass);

$login = "user";
$pass = "123456";

$stmt->execute();
?>
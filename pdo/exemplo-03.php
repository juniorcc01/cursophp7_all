<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(:LOGIN,:PASSWORD)");

$login = "Junior";
$password = "KRT";

$stmt->bindparam(":LOGIN",$login);
$stmt->bindparam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido OK!"




?>
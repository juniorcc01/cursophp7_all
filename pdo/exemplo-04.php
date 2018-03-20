<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN,dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Junior456";
$password = "KRT";
$id = 2;

$stmt->bindparam(":LOGIN",$login);
$stmt->bindparam(":PASSWORD",$password);
$stmt->bindparam(":ID",$id);

$stmt->execute();

echo "Alterado OK!"




?>
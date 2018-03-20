<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindparam(":ID",$id);

$stmt->execute();

echo "Alterado OK!"




?>
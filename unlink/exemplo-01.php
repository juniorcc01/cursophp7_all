<?php


$file = fopen("teste.txt","w+");

fclose($file);


unlink("teste.txt");


echo "arquivo remivido com sucesso!";

?>
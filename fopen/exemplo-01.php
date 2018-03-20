<?php

$file = fopen("log.txt","a+");

fwrite($file, Date("Y-m-d H:i:s")."\r\n");
fclose($file);

echo "Arquivo criado com suceso!!"

?>
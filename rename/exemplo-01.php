<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir ($dir1);
if (!is_dir($dir2)) mkdir ($dir2);

$fn1 = "readme.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $fn1)) {
	
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $fn1, "w+");
	
	fwrite($file, date("Y-m-d H:i:s"));
	fclose($file);
}

rename($dir1 . DIRECTORY_SEPARATOR . $fn1,
	   $dir2 . DIRECTORY_SEPARATOR . $fn1);
	   
echo "Arquivo movido!";

?>
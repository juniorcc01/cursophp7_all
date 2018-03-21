<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpdload">
	
	<button type="submit">send</button>

</form>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
	
	$file = $_FILES["fileUpdload"];
	
	if($file["error"]) {
		throw new Exception("Error: ". $file["error"]);
	}
	
	$dirUploads = "uploads";
	
	if (!is_dir($dirUploads)){
		mkdir($dirUploads);
	}
	
	if (move_uploaded_file($file["tmp_name"],$dirUploads . DIRECTORY_SEPARATOR .$file["name"]))
	{
		echo "Upload Realizado com sucesso!!!";
	} else{
			throw new Exception("não foi possivel realizar o upload");				
		}
	
}
?>
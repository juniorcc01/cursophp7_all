<?php

require_once("config.php");


echo session_save_path();

echo '<br>';

var_dump(session_status());
echo '<br>';

switch(session_status()){
	
		case PHP_SESSION_DISABLED:
			echo "As sessões estiveram desabilitadas";
			break;
		case PHP_SESSION_NONE:
			echo "As sessões estiveram habilidadas mas não iniciadas";
			break;
		case PHP_SESSION_ACTIVE:
			echo "A sessão está habilitada --> ". session_id();
			break;
}

?>
<?php

error_reporting(E_ALL);
set_time_limit(0);

date_default_timezone_set('Europe/London');

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PHPExcel Reader Example #18</title>

</head>
<body>

<h1>PHPExcel Reader Example #18</h1>
<h2>Reading list of WorkSheets without loading entire file</h2>

<?php

require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$inputFileType = 'Excel2007';


$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$worksheetNames = $objReader->listWorksheetNames("bbb.xlsx");


//$sheetData = $objReader->getActiveSheet()->toArray(null,true,true,true);

echo '<h3>Worksheet Names</h3>';
echo '<ol>';
foreach ($worksheetNames as $worksheetName) {
	echo '<li>', $worksheetName, '</li>';
}
echo '</ol>';
?>

<body>
</html>
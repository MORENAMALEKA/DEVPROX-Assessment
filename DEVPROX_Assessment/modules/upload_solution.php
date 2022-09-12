<?php

ini_set('display_errors', -1);
error_reporting(E_ALL);	

$file = $_FILES["csv_file"];

if (isset($file)) {
	//echo "true";

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["csv_file"]["name"]);
	$uploadOk = 1;
	$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	$handle = fopen($target_file, "r");
	$headers = fgetcsv($handle, 1000000, ",");
	while (($data = fgetcsv($handle, 1000000, ",")) !== FALSE) 
	{
		
	
	fclose($handle);




	}

?>
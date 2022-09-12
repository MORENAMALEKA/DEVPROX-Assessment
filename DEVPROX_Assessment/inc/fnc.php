<?php

ini_set('display_errors', -1);
error_reporting(E_ALL);	

include '../inc/solution_arrays.php';

$no_of_records = $_POST['no_of_records'];

generate_csv($no_of_records);

function generate_csv($no_of_records)
{
	//echo "no of rec".$no_of_records.'<br>';
	$names = array(
	'John',
	'Simon',
	'Jacob',
	'Michael',
	'Morena',
	'Lisa',
	'Elizabeth',
	'Mirriam',
	'Mary',
	'Amos',
	'Sarah',
	'Paul',
	'Godfrey',
	'Innocent',
	'Gift',
	'Precious',
	'Pearl',
	'Austin',
	'Jabulani',
	'Thandi'
	);


	//Array containing surnames
	$surnames = array(
	'Smith',
	'Simons',
	'Adams',
	'Nkosi',
	'Maleka',
	'Swaart',
	'Botha',
	'De Klerk',
	'Johnson',
	'Visser',
	'Theron',
	'Jersich',
	'Bardenhorst',
	'De Villiers',
	'Moloi',
	'Twala',
	'Zwane',
	'Gordon',
	'Lombard',
	'Douwes'
	);

	//Creating or opening the file in preparation to add data
	$filename = "../outputs/output.csv";
   	//$CSVFileName    = $filename.'.csv';
    $h = fopen($filename , 'a') or die("can't open file");
	fputcsv($h, array("ID","NAME","SURNAME", "INITIALS", "AGE", "DATE OF BIRTH"),",");

	//Generating the information - First name, Surname, Initials, Age, Date Of Birth
	for ($count = 1 ; $count <= $no_of_records; $count++) {

	//Declarations
	$firstname = '';
	$initial = '';
	$surname = '';
	$age = '';
	$dob = '';
	$existing_row = array();
	

	$firstname = $names[array_rand($names)];
	//echo $firstname."<br>";

	$initial = substr($firstname, 0, 1);
	//echo $initial."<br>";

	$surname = $surnames[array_rand($surnames)];
	//echo $surname."<br>";

	$start = strtotime("10 September 1950");
	$end = strtotime("22 July 2004");
	$timestamp = mt_rand($start, $end);
	$dob = date("Y-M-d", $timestamp);
	//echo $dob."<br>";

	$now = date("Y-M-d");
	$age = $now - $dob;
	//echo $now."<br>";
	//echo $age."<br>";


	//Check if the row is not a duplicate
	$unique_row = array($firstname,$surname, $initial, $age, $dob);
	if(in_array($unique_row, $existing_row)){

		//echo "The row already exists";
		$count = $count - 1;

	}else{

		//Adding the unique row to array of existing rows
		$existing_row[$count] = $unique_row;
		
		

		//Saving the data onto the .csv file
		fputcsv($h, array($firstname,$surname, $initial, $age, $dob));
	}


	}

	$message = $count." were created and added to the output.csv file";

	header("Location: http://localhost/DEVPROX_Assessment/?p=success&mess=$message");

}



?>
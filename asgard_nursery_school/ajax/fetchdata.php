<?php

// define("BASE_URL", "http://".$_SERVER["SERVER_NAME"]."/classproject2017");

require_once($_SERVER["DOCUMENT_ROOT"].'/Asgard_School_Management_System/asgard_nursery_school/database/dbconnclass.php');

$dbconn = new dbconnection;
$output = "";

if(isset($_POST['query']))
{

	$searchsql = "SELECT * FROM student WHERE sFirstName LIKE '%".$dbconn->ssql."%'
	OR sMiddleInitial LIKE '%".$dbconn->ssql."%' 
	OR sLastName LIKE '%".$dbconn->ssql."%' 
	OR sGender LIKE '%".$dbconn->ssql."%' 
	OR sPlaceOfBirth LIKE '%".$dbconn->ssql."%'
	OR sNationality LIKE '%".$dbconn->ssql."%'
	";
}

else
{
	$searchsql = "SELECT * FROM student ORDER BY sID";
}

$result = $dbconn->query($searchsql);

if($result)
{
	$output .= '
		<div class="table-responsive">
			<table class="table table bordered">
				<tr>
					<th>SID</th>
					<th>First Name</th>
					<th>Middle Name (Initial)</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Place of Birth</th>
					<th>Nationality</th>
				</tr>';
	while ($row = $dbconn->fetch()) {

				$output .= '
				<tr>
				<td>'.$row["sID"].'</td>
					<td>'.$row["sFirstName"].'</td>
					<td>'.$row["sMiddleInitial"].'</td>
					<td>'.$row["sLastName"].'</td>
					<td>'.$row["sGender"].'</td>
					<td>'.$row["sPlaceOfBirth"].'</td>
					<td>'.$row["sNationality"].'</td>
				</tr>
				';
			}
			echo $output;
		}
		else
		{
			echo "No Student Found";	
		}
		
		?>
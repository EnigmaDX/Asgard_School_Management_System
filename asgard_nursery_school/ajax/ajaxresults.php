<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/Asgard_School_Management_System/asgard_nursery_school/database/dbconclass.php');

$dbconn = new dbconn;
$output = "";

if(isset($_GET['searchtxt']))
{
	//get user search term
	$search = $_GET['searchtxt'];
    //query
	$searchsql = "SELECT * FROM student WHERE sFirstName LIKE '%".$search."%'";
}

	else
	{
		//display entire list
		$searchsql = "SELECT * FROM student";
	}

	//execute query
	$result = $dbconn->query($searchsql);

	if($result)
	{
		//display list in a table
		$output .= '
		<div class="table-responsive">
			<table class="table table bordered">
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
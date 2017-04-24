<?php
/**
*@author Derrick Noi Dowuona
*@version 1.0
**/

require_once($_SERVER["DOCUMENT_ROOT"].'/asgardschool/database/Connection.php');

$dbconn = new Connection;
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
$result = $dbconn->query1($searchsql);

if($result)
{
		//display list in a table
	$output .= '
	<table class="stable">
		<tr>
			<th>SID</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Place of Birth</th>
			<th>Nationality</th>
		</tr>';
		while ($row = $dbconn->fetch()) {

			$output .= 
			'
			<tr>
				<td>'.$row["sID"].'</td>
				<td>'.$row["sFirstName"].'</td>
				<td>'.$row["sMiddleInitial"].'</td>
				<td>'.$row["sLastName"].'</td>
				<td>'.$row["sGender"].'</td>
				<td>'.$row["sPlaceOfBirth"].'</td>
				<td>'.$row["sNationality"].'</td>
				<td><button type="submit" id="btnx" name="delbtn" value='.$row["sID"].'>DELETE</button></td>
				
			</tr>'
			;
		}
		echo $output;
	}
	else
	{
		echo "No Student Found";	
	}





	?>
<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/Asgard_School_Management_System/asgard_nursery_school/database/dbconnclass.php');

// include('../pages/view_students.php');

$dbconn = new dbconnection;
$output = "";

if(isset($_POST['searchKey'])){

$search = $_POST['searchKey'];

$searchsql = "SELECT * FROM student WHERE sFirstName LIKE '%".$search."%'";


}
//just display everything
else
{
	$searchsql = "SELECT * FROM student";
}

$result = $dbconn->query($searchsql);
$fetch = $dbconn->fetch();

$uID = $fetch['sID'];


$prepared = array(
	'userID' => $uID,
	'userFirstName' => 'SAI',
	'userLastName' => 'Kush'
);






echo json_encode($prepared);




?>


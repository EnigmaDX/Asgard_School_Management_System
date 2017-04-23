<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/asgardschool/classes/admin.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/asgardschool/database/Connection.php');

$id = '';
$fname = '';
$mname = '';
$lname = '';
$gender = '';
$dob = '';
$pob = '';
$nationality = '';
$class = '';

$admin = new Admin;
$dbconn = new Connection;


if(isset($_POST['add'])){
	addchild();
}

function addchild(){
	$admin = new Admin;

$id 		 = $_REQUEST['id'];
$fname  	 = $_REQUEST['fname'];
$mname  	 = $_REQUEST['mname'];
$lname  	 = $_REQUEST['lname'];
$gender 	 = $_REQUEST['gender'];
$dob         = $_REQUEST['dob'];
$pob         = $_REQUEST['pob'];
$nationality = $_REQUEST['nation'];
$class       = $_REQUEST['class'];

$execute = $admin->addChild($id,$fname,$mname, $lname, $gender,$dob, $pob,$nationality,$class);

if (!$execute) {
	echo '<script>alert("Error!");</script>';
}
else {
	echo '<script>alert("Success!");</script>';
}


}




?>
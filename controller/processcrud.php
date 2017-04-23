<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/asgardschool/classes/admin.php');

$id = '';
$fname = '';
$mname = '';
$lname = '';
$gender = '';
$dob = '';
$pob = '';
$nationality = '';
$class = '';

$dbconn = new Admin;


if(isset($_POST['add'])){
	addchild();
}

function addchild(){

$id = $_REQUEST['id'];
$fname = $_REQUEST['fname'];
$mname = $_REQUEST['mname'];
$lname = $_REQUEST['lname'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];
$pob = $_REQUEST['pob'];
$nationality = $_REQUEST['nation'];
$class = $_REQUEST['class'];

$execute = $dbconn->addChild($id,$fname,$mname,$gender,$pob,$nationality,$class);

if (!$execute) {
	header("Location:../pages/events.php");
}
else {
	header("Location:../index.php");
}


}




?>
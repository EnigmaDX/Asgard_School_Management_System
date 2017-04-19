<?php

require_once('../database/Connection.php');

	$staffID="";
	$staffFname="";
	$staffLname="";
	$staffPass="";
	$staffNum="";
	$staffAddress="";
	$ok=true;
	$status=1;
	

//check for login registration
if (isset($_POST['login'])) 
{
	validateLogin();
}

else if (isset($_POST['register']))
{
	validation();
}

/**
*verifies login
*/
function verifylogin()
{
	global $staffID, $staffPass;
	$staffID=$_REQUEST['Id'];
	$staffPass=$_REQUEST['password'];

	$sql="SELECT * FROM Staff WHERE staffID='$staffID'";
		
		//create new instance
	$verlogin=new dbconnection();
	$result=$verlogin->query($sql);
	
		if($result)
		{
			$row=$verlogin->fetch();
			$passwd=$row['Password'];

			if (password_verify($StaffPass, $passwd))
			{
				session_start();
				$_SESSION['userid']=$row['staffID'];
				$_SESSION['per_id']=$row['per_id'];
				header("location: ../index.php");
			}
			else
			{
				echo "login failed";
			}

		}
	
}

/**
*checks if username or password in empty
*/
function validateLogin()
{
	global $uname, $pass, $ok;
	$staffID=$_REQUEST['Id'];
	$StaffPass=$_REQUEST['password'];
	if (empty($_REQUEST['Id'])) 
	{
		$ok=false;
	}
	else
	{
		$staffID=$_REQUEST['Id'];
	}
	if (empty($_REQUEST['password'])) 
	{
		$ok=false;
	}
	else
	{
		$staffPass=$_REQUEST['password'];
	}
	
	if($ok)
	{
		verifylogin();
	}
}

?>
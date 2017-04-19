<?php
//session start for sessions
session_start();

//check for login and permission
function verifyLogin()
{
	if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
	{
		
		//echo 'Welcome:'.$user;
	}
	else
	{
		header('Location:../login/index.php');
	}
}
?>
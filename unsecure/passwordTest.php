<?php
	echo "Teacher password";
	$pass=password_hash('Teacher', PASSWORD_DEFAULT);
	echo $pass;

	echo "Parent password";
	$pass=password_hash('Parent', PASSWORD_DEFAULT);
	echo $pass;

	//everyone with status id=1 password is Teacher
	//everyone with status id=2 password is Parent
?>
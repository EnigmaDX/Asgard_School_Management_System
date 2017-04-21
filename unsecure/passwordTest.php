<?php
	$pass=password_hash('Parent', PASSWORD_DEFAULT);
	echo $pass;

	//everyone with status id=1 password is teacher
	//everyone with status id=2 password is parent
?>
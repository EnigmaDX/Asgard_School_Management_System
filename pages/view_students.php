<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>View Students</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="../js/ajax.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body onload="loadDoc()">
		<li><a href='#addform'>ADD STUDENT</a></li>

		<div class="container"> 
			<h3 id="stlist" align="center">STUDENTS' LIST</h3>

			<div class="form-group">
				<div class="input-group">
					<div id="ss">
						<input type="text" name="searchtxt" id="searchtxt" placeholder="search student by firstname" onkeyup="loadDoc()" class="form-control"  autofocus />
					</div>
					<br /><br>
					<div id="result"></div>
				</div>
			</div>
			<div id="addform">
		<h2>ADD STUDENT TO CLASS</h2>
		<form action="" method="post">
			<div class="left">
				<fieldset><input placeholder="ID" type="text" name="id"></fieldset>
				<fieldset><input placeholder="First Name" type="text" name="fname"></fieldset>
				<fieldset><input placeholder="Middle Name Initial" type="text" name="mname"></fieldset>
				<fieldset><input placeholder="Last Name" type="text" name="lname"></fieldset>
			</div>
			<div class="right">
				<fieldset >
					Gender..<br>
					<input id="gender" type="radio" value="M" name="gender"<?php if
					(isset($gender) && $gender=="female") echo "checked";?> value="M">Male
					<input id="gender" type="radio" value="F" name="gender"<?php if (isset($gender) && $gender=="F") echo "checked";?> value="female">Female
					<span id="gendEr"></span>
				<fieldset><input placeholder="DOB" type="text" name="dob"></fieldset>
				<fieldset><input placeholder="PlaceOB" type="text" name="pob"></fieldset>
				<fieldset><input placeholder="Nationality" type="text" name="nation"></fieldset>
				<fieldset><input placeholder="Class" type="text" name="class"></fieldset>
			</fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" name="add" type="submit">ADD STUDENT</button>
			</div>
		</form>
	</div>
		</div>

		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="../js/ajax.js"></script>
		<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
		<script src="../js/plugins.js"></script>
		<script src="../js/main.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script>

			function move(){

				window.location = 'childinfo.php';
			}
		</script>

	</body>
	
	</html>

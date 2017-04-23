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


		<div class="container">
			<h2 id="stlist" align="center">STUDENTS' LIST</h2><br/>

			<div class="form-group">
				<div class="input-group">
				<div id="ss">
					<input type="text" name="searchtxt" id="searchtxt" placeholder="search student by firstname" onkeyup="loadDoc()" class="form-control"  />
			</div>
			<br /><br>
			<div id="result"></div>
		</div>
		</div>
		<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<div id="login">
		<div class="panel col-md-6 col-md-offset-3">
			<div >
			<h3>Parent/Staff Login</h3>
		</div>
		<div class="col-md-6 col-md-offset-3 panel-body">
			<form>
			    <div class="input-group">
			      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			      <input id="id" type="text" class="form-control" name="Id" placeholder="Id">
			    </div>
			    <br>
			    <div class="input-group">
			      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
			    </div>
			    <br>
			    <!-- <div class="input-group"> -->
			    	<a href="pages/childinfo.php"><button type="button" class="btn btn-primary btn-block">Login</button></a>
			    <!-- </div> -->
	  		</form>
		</div>
		<div class="panel-footer col-md-6 col-md-offset-3">
			<a href="#">Forgot Passsword?</a>
		</div>
		</div>
	</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		
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

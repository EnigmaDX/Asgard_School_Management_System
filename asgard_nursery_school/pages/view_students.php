<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>View Students</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/style.css">
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body onload="loadDoc()">
		<header id="header">
			<div class="container">
				<a href="../index.html" id="logo" title="Asgardian Nursery School">Asgardian Nursery School</a>
				<div class="menu-trigger"></div>
				<nav id="menu">
					<ul>
						<li><a href="ourPrograms.html">Our Programs</a></li>
						<li><a href="../admissions/admissionspage1.html">Admission</a></li>
					</ul>
					<ul>
						<li><a href="childinfo.html">Ward Info</a></li>
						<li><a href="events.html">Events</a></li>
					</ul>
				</nav>
				<!-- / navigation -->
			</div>
			<!-- / container -->
		</header>
		<!-- / header -->
		<div class="divider"></div>

		<div class="container">
			<h2 align="center">STUDENTS' LIST<br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>

					<form method="GET" action=""> 
						<input type="text" name="searchtxt" id="searchtxt" placeholder="Search by Student Name" class="form-control"  autofocus />
					</form>
					
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>




		<script type="text/javascript" src="ajax.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
		
		<!-- <script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script> -->
		<script src="../js/plugins.js"></script>
		<!-- <script src="../js/main.js"></script> -->
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- <script type="text/javascript" src="../ajax/newajax.js"></script> -->

	</body>
	
	</html>

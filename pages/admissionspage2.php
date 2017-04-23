<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Asgardian Nursery School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/admissions.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<?php
			require_once('../layout/menu.php');
		?>
	<div class="divider"></div>

 <!-- beginning of body -->
<div id = "midhead">
	<h1> Online Admissions Page <h1>

	<h4>  <span style = 'color: teal'> Health Information </span> </h4>
	<h4> <span style= 'color: red'> To be Completed by Parent or Guardian </span> </h4>
	<span style= 'color:red'>*</span> Required Fields <br><br>
	</div>

	<div id = "mid">
		<form method = "post" action = "admissionsSubmit.php" name = "form">
			Child's Blood Type: <input type = "text" name = "bloodType" class = "form-control">

<!--contact information -->

	 <h4> <span style = 'color: teal'> Contact Info </span></h4>
	   <span style= 'color:red'>*</span> Parent's name: <input type = "text" id = "mname" name = "parentName" class="form-control">
	   <span style= 'color:red'>*</span> Mobile Phone: <input type = "text" id = 'mtel' name = "parentNumber" class="form-control">
	   <br><br>

	   <span style= 'color:red'>*</span> Preferred Hospital: <input type = "text" id = "hosname" name = "hospital" class="form-control">
	   <span style= 'color:red'>*</span> Doctor's Name: <input type = "text" id = "docname" name = "doctorName" class="form-control">
	   <span style= 'color:red'>*</span> Phone: <input type = "text" id = "doctel" name = "doctorPhone" class="form-control">
	   <br><br>

<!--emergency medical authorisation -->

				<h3> <span style= 'color:red'>*</span> <span style = 'color: teal'> Emergency Medical Authorisation </span> </h3>
				 The school health office requires the following information.<br><br>

				<span style = 'color:red'> PART 1 OR PART 2 must be completed.</span><br>
				<span style = 'color: blue'> Part1: To Grant Consent </span> <br>
				<input type = "checkbox" id = "part1" value = "yes" name = "consent">
				<span style = 'color:red'> I hereby give consent</span> to Asgardian Nursery School for: <br>
				1. The administration of emergency treatment and medication deemed necessary.<br>
				2. Transfer my child to a hospital reasonably accessible for advanced care.<br><br>

				<span style = 'color: blue'> Part 2: Refusal To Grant Consent </span> <br>
				<input type = "checkbox" id = "part2" value = "no" name = "consent2">
				<span style = 'color:red'> I DO NOT give consent</span> to Asgardian Nursery School
				for the emergency treatment of my child. <br> In the event of illness or injury
				I wish the school authorities to take the following action: <br>
				<textarea class="form-control"></textarea><br><br><br>


<br>
<!-- submit button -->
 <div class="form group col-md-4">
 		 <input type = "submit" value = "Submit" id = "next" name = "page2button" class = "btn btn-primary form-control" onclick = "validatePage2()">
		</form>
<br><br>
<!-- previous page buton -->
		<form action = "admissionspage1.php">
		  <input type = "submit" value = "Previous Page" id = "submit" class = "btn btn-primary form-control">
		</form>
	</div>
	</div>
<!-- end of body -->

<!--footer: from template -->
	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">CT 3433<br>Cantonments, Accra</a></li>
						<li class="mail"><a href="https://asgardnursery.wordpress.com/">sentinels@gmail.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li>
					</ul>
				</article>
				<article class="col-3">
					<h3>Social media</h3>
					<p>You can follow us on social media.</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2017 Asgardian Nursery School. Created by <a href="https://asgardnursery.wordpress.com/" title="Designed by The Sentinels" target="_blank">The Sentinels</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

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

	<script type = "text/javascript" src = "../js/admissionspage2.js">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>

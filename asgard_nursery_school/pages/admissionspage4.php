<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Asgardian Nursery School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/admissions.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<?php
			require_once('../layout/menu.html');
		?>
	<div class="divider"></div>

<div id = "midhead">
	<h1> Online Admissions Page <h1>

	<h4>  Parent / Guardian Information </h4>
	</div>

	<div id = "mid">
		<form method = "post" action = "admissionspage5.html" name = "form">

			<div id = "guardian1">
		      <h3> <span style= 'color: blue'> Parent / Guardian 1 </span> </h3>
		        Title:
		        <input type="checkbox" id="option1"><label for="option1">Mr</label>
		        <input type="checkbox" id="option2"><label for="option2">Mrs</label>
		        <input type="checkbox" id="option3"><label for="option3">Miss</label>
		        <input type="checkbox" id="option4"><label for="option4">Dr</label>
		        <br><br>

		      <span style= 'color:red'>*</span>  Name: <input type = "text" placeholder = "First Name" id = "guard1fname" class="input">
		              <input type = "text" placeholder = "Last Name" id = "guard1lname" class="input">
		              <br><br>

		        <span style= 'color:red'>*</span> Relationship to child: <input type = "text" maxlength = 30 id = "guard1relate" class="input"><br><br>

		        <span style= 'color:red'>*</span> Nationality: <input type = "text" id = "guard1nationality" class="input"><br><br>

		        <span style= 'color:red'>*</span> Country of permanent residence: <input type = "text" maxlength = 60 id = "guard1countryresidence" class="input"><br><br>

		        <span style= 'color:red'>*</span> Occupation: <input type = "text" id = "guard1work" class="input"><br><br>

		        <span style= 'color:red'>*</span> Home address: <input type = "text" id = "guard1home" class="input"><br><br>

		        <span style= 'color:red'>*</span> Postal address: <select id = "guard1post1">
		          <option> Select... </option>
		          <option> Same as Home address </option>
		          <option> Different from home address </option>
		        </select> <br><br>

		         If different from home address, enter postal address here:
		        <input type = "text" id = "guard1post2" class="input"><br><br>

		        <span style= 'color:red'>*</span> Telephone number: <input type = "tel" id = "guard1tel" class="input"><br><br>

		        <span style= 'color:red'>*</span> E-mail address: <input type = "email" id = "guard1mail" class="input">
  		</div>
  <br><br>

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  <div id = "guardian2">
    <h3> <span style= 'color: blue'>Parent / Guardian 2 </span> </h3>
          Title:
          <input type="checkbox" id="option5"><label for="option5">Mr</label>
          <input type="checkbox" id="option6"><label for="option6">Mrs</label>
          <input type="checkbox" id="option7"><label for="option7">Miss</label>
          <input type="checkbox" id="option8"><label for="option8">Dr</label>
          <br><br>

          <span style= 'color:red'>*</span> Name: <input type = "text" placeholder = "First Name" id = "guard2fname" class="input">
                <input type = "text" placeholder = "Last Name" id = "guard2lname">
                <br><br>

          <span style= 'color:red'>*</span> Relationship to child: <input type = "text" maxlength = 30 id = "guard2relate" class="input"><br><br>

          <span style= 'color:red'>*</span> Nationality: <input type = "text" id = "guard2nationality" class="input"><br><br>

          <span style= 'color:red'>*</span> Country of permanent residence: <input type = "text" maxlength = 50 id = "guard2countryresidence" class="input"><br><br>

          <span style= 'color:red'>*</span> Occupation: <input type = "text" id = "guard2work" class="input"><br><br>

          <span style= 'color:red'>*</span> Home address: <input type = "text" id = "guard2home" class="input"><br><br>

          <span style= 'color:red'>*</span> Postal address: <select id = "guard2post1">
            <option> Select... </option>
            <option> Same as Home address </option>
            <option> Different from home address </option>
          </select> <br><br>

          If different from home address, enter postal address here:
          <input type = "text" id = "guard2post2" class="input"><br><br>

          <span style= 'color:red'>*</span> Telephone number: <input type = "tel" id = "guard2tel" class="input"><br><br>

          <span style= 'color:red'>*</span> E-mail address: <input type = "email" id = "guard2mail" class="input"><br><br>
  </div>

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

		 <h3> <span style= 'color: teal'> * Next Page: Child Health Information </span> <h3>
 		 <input type = "button" value = "Next Page" id = "next" onclick="validatePage4()">
		</form>


		<form action = "admissionspage3.html">
		  <input type = "submit" value = "Previous Page" id = "submit">
		</form>
	</div>

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

	<script type = "text/javascript" src = "../js/admissionspage4 copy.js">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>

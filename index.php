<?php/**
*@author Nana Kwame Oteng Darkwah
*@version 1.0
*
**/
?>

<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Home-Asgardian Nursery School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style_homepage.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
		<?php require_once('layout/menu.php'); ?>
	
	<div class="slider">
		<ul class="bxslider">
			<li style="display: inline-block;">
				<div class="container">
					<div class="info">
						<h2>Give your child <br><span>The Right Start</span></h2>
						<a href="#">Review our program</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container" id = "slide2">
					<div class="info">
						<h2> <br><span></span></h2>
						<a href="#"></a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container" id = "slide3">
					<div class="info">
						<h2><br><span></span></h2>
						<a href="#"></a>
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
	</div>
	
	<section class="posts">
		<div class="container">
			<article>
				<div class="pic"><img width="121" src="images/2.png" alt=""></div>
				<div class="info">
					<h3>We are learning to love learning</h3>
					<p>Through our varied learning approaches, we are able to identify the
					different genuises of all our students and engage them in fun learning experiences. 
					This is how we help our students become great learners</p>
				</div>
			</article>
			<article>
				<div class="pic"><img width="121" src="images/3.png" alt=""></div>
				<div class="info">
					<h3>We are going places</h3>
					<p>Who can knows what end there can be to great pre-school education? 
					With an Asgardian training, there is no telling.
					'Oh the places your child will go!'</p>
				</div>
			</article>
		</div>
            
		<!-- / container -->
	</section>

<hr>
	<hr>
	
	<div class="container">
		<a href="#fancy" class="info-request">
			<span class="holder">
				<span class="title">Request information</span>
				<span class="text">Do you have some questions? Let's start a conversation</span>
			</span>
			<span class="arrow"></span>
		</a>
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
			<p class="copy">Copyright 2017 Asgardian Nursery School. Created by <a href="https://asgardnursery.wordpress.com/" title="Designed by The Sentinels" target="_blank"> The Sentinels</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>

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

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<script src="js/slider.js"></script>
</body>
</html>

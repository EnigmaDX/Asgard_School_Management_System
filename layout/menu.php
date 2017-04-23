
<?php require_once dirname(__FILE__).'/../controller/define.php'; 
$_SESSION['user'] = "user";
?>

<!DOCTYPE html>
<html>
<body>
	<header id="header">
		<div class="container">
			<a href="<?php echo BASE_URL; ?>index.php" id="logo" title="ASGARDIAN NUSERY SCHOOL">ASGARDIAN NUSERY SCHOOL</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="<?php echo BASE_URL; ?>pages/ourPrograms.php">Our Programs</a></li>
					<li><a href="<?php echo BASE_URL; ?>pages/admissions_homepage.php">Admission</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo BASE_URL; ?>pages/events.php">Events</a></li>
					<li><a href="#addform" class="get-contact">Contact</a></li>
					<li><a href="#fancy" class="get-contact">Contact</a></li>
                                        <?php 
                                        $base = BASE_URL;
					if(empty($_SESSION["user"])){
                                            echo "<li><a href='#login' class='get-contact'>Login</a></li>";
                                        }else {
                                            echo "<li><a href='$base./login/logout.php' class='get-contact'>Logout</a></li>";
                                        }
                                        ?>

				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	</header>
	<!-- / header -->

</body>
</html>

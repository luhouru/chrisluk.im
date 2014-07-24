<?php
// START INDEX CODE // COPYRIGHT 2014 // CHRISLUK.IM //
// SET TIMEZONE TO EAST COAST
date_default_timezone_set('America/New_York');

//require supporting functions
require_once("/var/www/html/send_email.php");

//check to see if there are any other actions they want
//if not, show the general dashboard
if (isset($_GET['action'])) {
	switch($_GET['action']) {

	case "sendemail":
	if (!isset($_POST['name'])) {
		$_POST['name'] = NULL;
	}
	if (!isset($_POST['email'])) {
		$_POST['email'] = NULL;
	}
        if (!isset($_POST['subject'])) {
		$_POST['subject'] = NULL;
	}
	if (!isset($_POST['message'])) {
		$_POST['message'] = NULL;
	}
	$action = send_email($_POST['name'],$_POST['subject'],$_POST['email'],$_POST['message']);
	break;
        
	default:
	$action = "#";
	break;
	}
    
} else {
}

?>
<!DOCTYPE HTML>
<!--
	Twenty 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact Me</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="shortcut icon" type="image/png" href="/images/gt-fav-icon.png"/>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body background="/images/banner.jpg" class="contact loading">
	
		<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="index.php">CHRISLUK<span>.IM</span></a></h1>
				<nav id="nav">
					<ul>
						<li class="submenu">
							<a href="">MENU</a>
							<ul>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li class="submenu">
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Dolore Sed</a></li>
										<li><a href="#">Consequat</a></li>
										<li><a href="#">Lorem Magna</a></li>
									</ul>
								</li>
							</ul>
						</li>
                        <li class="current"><a href="index.php" class="scrolly">HOME</a></li>
					</ul>
				</nav>
			</header>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon fa-envelope"></span>
					<h2>Drop A Line</h2>
					<p>Share your knowledge with me.</p>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 special container small">
					
						<!-- Content -->
							<div class="content">
								<form action="contact.php?action=sendemail" method="POST" role="form">									<div class="row half no-collapse-1">
										<div class="6u">
											<input type="text" name="name" placeholder="Name" />
										</div>
										<div class="6u">
											<input type="text" name="email" placeholder="Email" />
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<input type="text" name="subject" placeholder="Subject" />
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<textarea name="message" placeholder="Message" rows="7"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="buttons">
												<li><input type="submit" class="button special"></a></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
							
					</section>
				
			</article>

		<!-- Footer -->
			<footer id="footer">
			
				<ul class="icons">
					<li><a href="http://www.twitter.com" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="http://www.facebook.com/cel2971" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="http://www.linkedin.com" class="icon circle fa-linkedin"><span class="label">Linkedin</span></a></li>
					<li><a href="http://www.github.com/cluk2971" class="icon circle fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
				</ul>
				
				<span class="copyright">&copy; CHRISLUK 2015</span>
			
			</footer>

	</body>
</html>
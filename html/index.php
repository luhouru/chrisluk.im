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
	if (!isset($_POST['message'])) {
		$_POST['message'] = NULL;
	}
	$action = send_email($_POST['name'],$_POST['email'],$_POST['message']);
	break;
        
	default:
	$action = "#";
	break;
	}
    
} else {
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Chris Luk | Developer </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
                    <img src="images/logo.PNG"/>
					<h1>CHRIS LUK</h1>
					<p>Software Developer</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly scrolly-centered">SCROLL</a>
				</footer>
			</section>
		
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>BRIEF</h2>
				</header>
				<p> Computer Scientist looking for a well established organization to work for. <br />
                    Aspiring eSports fanatic and manager. Avid League of Legends player. <br />
                    Lover of coffee, dogs, and hitting up the bars. <br /> <br />
                    
				City of Wellesley, City of Boston.<br />
				Email: luk@chrisluk.im</p>
				<footer>
					<a href="#first" class="button style2 scrolly">KEEP SCROLLING</a>
				</footer>
			</section>
		
		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="http://www.google.com" class="image full"><img src="images/pic01.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Hello There!<br />
						PROJECT 1</h2>
					</header>
					<p>Why don't you just love this blank white space?</p>
				</div>
			</article>
		
		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="http://www.google.com" class="image full"><img src="images/pic02.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Still Here?<br />
						You must love me.</h2>
					</header>
					<p>Why is this picture black?</p>
				</div>
			</article>
		
		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>This Latin is disturbing.</h2>
					<p>I need to get rid of it.<br />
					Cleaning up.</p>
				</header>
				<div class="inner gallery">
					<div class="row flush">
						<div class="3u"><a href="images/fulls/01.jpg" class="image full"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
						<div class="3u"><a href="images/fulls/02.jpg" class="image full"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="3u"><a href="images/fulls/03.jpg" class="image full"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="3u"><a href="images/fulls/04.jpg" class="image full"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row flush">
						<div class="3u"><a href="images/fulls/05.jpg" class="image full"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="3u"><a href="images/fulls/06.jpg" class="image full"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
						<div class="3u"><a href="images/fulls/07.jpg" class="image full"><img src="images/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
						<div class="3u"><a href="images/fulls/08.jpg" class="image full"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
					</div>
				</div>
			</article>
		
		<!-- Contact -->
			<article class="container box style3">
				<header>
					<h2 style="color:white;">CONTACT ME</h2>
					<p style="color:white;">Send me a message!</p>
				</header>
				<form action="index.php?action=sendemail" method="POST" role="form">
					<div class="row half">
						<div class="6u"><input type="text" class="text" name="name" placeholder="Name" /></div>
						<div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
					</div>
					<div class="row half">
						<div class="12u">
							<textarea type="text" name="message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<ul class="actions">
								<li><input type="submit" class="button style2 scrolly" value="    Send Message    " /></li>
							</ul>
						</div>
					</div>
				</form>
			</article>
		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
				<li><a href="http://www.facebook.com/cel2971" class="fa fa-facebook solo"><span>Facebook</span></a></li>
				<li><a href="luk@chrisluk.im" class="fa fa-gmail solo"><span>Email</span></a></li>
				<li><a href="#" class="fa fa-pinterest solo"><span>Pinterest</span></a></li>
				<li><a href="http://www.github.com/cluk2971" class="fa fa-github solo"><span>GitHub</span></a></li>
				<li><a href="http://www.linkedin.com/pub/chris-luk/67/ba6/62a/" class="fa fa-linkedin solo"><span>LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; CHRISLUK 2014</li>
				</ul>
			</div>
		</section>

	</body>
</html>
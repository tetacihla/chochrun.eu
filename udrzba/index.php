<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$maintenance = file_get_contents("status.txt");
$ip=$_SERVER["REMOTE_ADDR"];
$whitelist = file_get_contents("whitelist.txt");
$whitelist = explode("\n", $whitelist);
if($maintenance == 0 OR in_array($ip,$whitelist)){
	header("Location: http://46.28.109.68/");
}
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from choco-pixel.com/SeventyTwo-1.4/Video/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 11:24:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="SeventyTwo - Premium Coming Soon Template">
		<meta name="author" content="http://choco-pixel.com/">
		<title>Chochrun.eu - Údržba</title>
		
		<!-- Stylesheets -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrapValidator.min.css" rel="stylesheet">
		<link href="css/ladda-themeless.min.css" rel="stylesheet">
		<link href="css/animate.min.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.css" rel="stylesheet">
		<link href="css/app.css" rel="stylesheet">
		
		<link href="css/settings-panel.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Preloader -->
		<div id="preloader">
			<div id="status" class="text-center">
				<div class="spinner">
				  <div class="rect1"></div>
				  <div class="rect2"></div>
				  <div class="rect3"></div>
				  <div class="rect4"></div>
				  <div class="rect5"></div>
				</div>
			</div>
		</div>
		
		<!-- Main -->
		<section class="main text-center" id="home">
			<div class="page">
				<div class="wrapper">
					<div class="container">
						<img src="../images/logo.png" alt="Logo">
						<h1 class="heading">Právě probíhá údržba.</h1>
						<p>
							Pro zlepšení kvality našich služeb je web momentálně nedostupný.
						</p>
						<p>
							Web by měl být dostupný za:
						</p>
						<div class="row">
							<div id="countdown"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.backstretch.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/jquery.tubular.1.0.js"></script>
		<script src="js/bootstrapValidator.min.js"></script>
		<script src="js/validator/emailAddress.js"></script>
		<script src="js/spin.min.js"></script>
		<script src="js/ladda.min.js"></script>
		<script src="js/retina.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/init.js"></script>
		
		<script src="js/settings-panel.js"></script>
	</body>

<!-- Mirrored from choco-pixel.com/SeventyTwo-1.4/Video/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 11:25:09 GMT -->
</html>
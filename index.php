<!DOCTYPE HTML>
<html>
	<head>
		<title>Muzzik Ltd - Music chosen by people, not computers.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="stylesheet" href="assets/css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" /></noscript>
	</head>
	<body class="landing is-preload">
		<!-- Page Wrapper -->
			<div id="page-wrapper">
				<video autoplay muted loop id="myVideo">
				  	<source src="vids/muzzik-intro.mp4" type="video/mp4">
				</video>
				<!-- Header -->
					<?php include "inc/header_menu.php"; ?>

				<!-- Banner -->
					<?php include "inc/in-banner.php"; ?>

				<!-- Sections -->
					<?php include "inc/in-section-one.php"; 
						  include "inc/in-section-two.php";
				          include "inc/in-section-three.php";
				    ?>
				<!-- Footer -->
					<?php include "inc/footer.php"; ?>
			</div>
		<!-- Scripts -->
			<?php include "inc/javas.php";  ?>
	</body>
</html>
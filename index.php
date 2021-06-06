<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Sistem Informasi Pendaftaran Peserta Didik Baru SMK</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="lib/home/assets/img/favicon.png" rel="icon">
	<link href="lib/home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="lib/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="lib/home/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="lib/home/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="lib/home/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/home/assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="lib/home/assets/vendor/owl.carousel/lib/home/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="lib/home/assets/css/style.css" rel="stylesheet">

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header">
		<div class="container">

			<div id="logo" class="pull-left">
				<h1><a href="index.html">SI PPDB SMK</a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="lib/home/assets/img/logo.png" alt=""></a>-->
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="">Home</a></li>
					<li><a href="#services">Fitur</a></li>
					<?php
					session_start(); 

					include 'backend/server/connection.php';

					if (!isset($_SESSION['uid'])) {
						echo '<li><a href="frontend/auth/register.php">Daftar</a></li>
						<li><a href="frontend/auth/login.php">Masuk</a></li>';
					} elseif (isset($_GET['logout'])) {
						session_destroy();
						unset($_SESSION['uid']);
						echo '<li><a href="frontend/auth/register.php">Daftar</a></li>
						<li><a href="frontend/auth/login.php">Masuk</a></li>';
					} elseif (isset($_SESSION['uid'])) {
						echo '<li><a href="?logout=1">Logout</a></li>';
					}
					?>
				</nav><!-- #nav-menu-container -->
			</div>
		</header><!-- End Header -->

		<!-- ======= Intro Section ======= -->
		<section id="intro" class="shadow">

			<div class="intro-content">
				<h2>Sistem Informasi Pendaftaran Peserta Didik Baru SMK</h2>
				<div>
					<?php
					// session_start(); 

					include 'backend/server/connection.php';

					if (!isset($_SESSION['uid'])) {
						echo '<a href="frontend/auth/register.php" class="btn-get-started scrollto">Daftar</a>
						<a href="frontend/auth/login.php" class="btn-get-started scrollto">Masuk</a>';
					} elseif (isset($_GET['logout'])) {
						session_destroy();
						unset($_SESSION['uid']);
						echo '<a href="frontend/auth/register.php" class="btn-get-started scrollto">Daftar</a>
						<a href="frontend/auth/login.php" class="btn-get-started scrollto">Masuk</a>';
					} elseif (isset($_SESSION['uid'])) {
						echo '<a href="dashboard.php" class="btn-get-started scrollto">Dashboard</a>';
					}
					?>				
				</div>
			</div>

		</section><!-- End Intro Section -->

		<main id="main">

			<!-- ======= About Section ======= -->
			<section id="about" class="wow fadeInUp">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 about-img">
							<img src="lib/home/assets/img/about-img.png" alt="">
						</div>

						<div class="col-lg-8 content">
							<h2>Fitur-Fitur pada Website SI PPDB SMK</h2>

							<ul>
								<li><i class="ion-android-checkmark-circle"></i> Daftar Online SMK.</li>
								<li><i class="ion-android-checkmark-circle"></i> Daftar 3 Jurusan yang Ada di Website Ini.</li>
								<li><i class="ion-android-checkmark-circle"></i> Daftar Banyak dari SMK & Jurusan Lainnya.</li>
								<li><i class="ion-android-checkmark-circle"></i> Banyak Pilihan SMK yang Bisa Didaftar dengan Kuantitas Kapasitas Jurusan yang Diberikan.</li>
							</ul>

						</div>
					</div>

				</div>
			</section><!-- End About Section -->
		</main>

		<!-- ======= Footer ======= -->
		<footer id="footer">
			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong>Reveal</strong>. All Rights Reserved
				</div>
				<div class="credits">
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
		</footer><!-- End Footer -->

		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

		<!-- Vendor JS Files -->
		<script src="lib/home/assets/vendor/jquery/jquery.min.js"></script>
		<script src="lib/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="lib/home/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="lib/home/assets/vendor/php-email-form/validate.js"></script>
		<script src="lib/home/assets/vendor/wow/wow.min.js"></script>
		<script src="lib/home/assets/vendor/venobox/venobox.min.js"></script>
		<script src="lib/home/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="lib/home/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
		<script src="lib/home/assets/vendor/superfish/superfish.min.js"></script>
		<script src="lib/home/assets/vendor/hoverIntent/hoverIntent.js"></script>
		<script src="lib/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

		<!-- Template Main JS File -->
		<script src="lib/home/assets/js/main.js"></script>

	</body>

	</html>
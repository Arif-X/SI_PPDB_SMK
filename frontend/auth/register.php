<?php 
session_start(); 

if (isset($_SESSION['uid'])) {
	$_SESSION['msg'] = "";
	header('location: ../../');
}

?>

<?php
include('../../backend/server/connection.php');
include('../../backend/auth/auth.php');
?>

<html>
<head>    
	<title>Register</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="../../lib/import/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="../../lib/import/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-secondary shadow-sm">
		<strong><a class="navbar-brand text-white" href="../../">PPDB SMK</a></strong>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				
			</ul>
			<div class="my-2 my-lg-0">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<strong><a class="nav-link text-white" href="register.php">Daftar <span class="sr-only"></span></a></strong>
					</li>
					<li class="nav-item">
						<strong class="nav-link text-white">|<span class="sr-only"></span></strong>
					</li>
					<li class="nav-item">
						<strong><a class="nav-link text-white" href="login.php">Masuk <span class="sr-only"></span></a></strong>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div style="padding-top: 60px;">		
		<div class="row">
			<div class="col-md-3">	
			</div>
			<div class="col-md-6">	
				<div class="card">
					<div class="card-header text-white bg-secondary">
						<strong>Daftar</strong>
					</div>
					<div class="card-body">	
						<form method="post" action="register.php">
							<?php include('../../backend/auth/errors.php'); ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="nisn">NISN</label>
										<input type="number" name="nisn" id="nisn" class="form-control">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" name="nama" id="nama" class="form-control">
									</div>
								</div>
							</div>												
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password_1" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Konfirmasi Password</label>
								<input type="password" name="password_2" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-secondary" name="register" style="width:100%;">Daftar</button>
							</div>
						</form>
						<p>
							Sudah Mendaftar? <a href="login.php">Masuk Disini</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">	
			</div>			
		</div>
	</div>
</body>
</html>
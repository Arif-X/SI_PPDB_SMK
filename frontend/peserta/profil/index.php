<?php 

session_start(); 

if (!isset($_SESSION['uid'])) {
	$_SESSION['msg'] = "";
	header('location: ../../../frontend/auth/login.php');
}

include_once '../../../backend/server/connection.php';
include_once '../../../backend/peserta/profil/get.php';
include_once '../menu/menu.php';

include_once '../../../backend/middleware/peserta.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Profil User SI PPDB SMK">
	<meta name="keywords" content="si ppdb smk, ppdb smk">
	<meta name="author" content="arip">
	<link rel="icon" href="favicon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<title>PROFIL</title>

	<!--Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="../../../lib/assets/css/fontawesome.css">
	<!-- ico-font -->
	<link rel="stylesheet" type="text/css" href="../../../lib/assets/css/icofont.css">
	<!-- Themify icon -->
	<link rel="stylesheet" type="text/css" href="../../../lib/assets/css/themify.css">
	<!-- Flag icon -->
	<link rel="stylesheet" type="text/css" href="../../../lib/assets/css/flag-icon.css">
	<!-- Owl css -->
	<link rel="stylesheet" type="text/css" href="../../../lib/assets/css/owlcarousel.css">
	<!-- App css -->
	<link rel="stylesheet" type="text/css" href="../../../lib/assets/css/style.css">
	<!-- Responsive css -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}"> -->

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="../../../lib/import/datatables/DataTables-1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="../../../lib/import/datatables/Bootstrap-4-4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../lib/import/datatables/FixedColumns-3.3.2/css/fixedColumns.bootstrap4.min.css" rel="stylesheet">

	<script src="../../../lib/import/datatables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="../../../lib/import/datatables/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>    
	<script src="../../../lib/import/datatables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
	<script src="../../../lib/import/datatables/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../../lib/import/datatables/FixedColumns-3.3.2/js/dataTables.fixedColumns.min.js"></script>  
</head>

<body>
	<!-- Loader starts -->
	<div class="loader-wrapper">
		<div class="loader bg-white">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</div>
	<!-- Loader ends -->

	<!--page-wrapper Start-->
	<div class="page-wrapper">

		<!--Page Header Start-->
		<div class="page-main-header">
			<div class="main-header-left">
				<div class="logo-wrapper">
					<div class="row">
						<dir class="col-sm-4 text-center">
							<a href="../../../">
								<img src="../../../lib/img/logo.jpg" alt="" style="max-width: 80%; height: auto;"/> 								
							</a>
						</dir>
						<dir class="col-sm-8" style="vertical-align: middle; padding-left: 0px !important;">
							<h3 style="font-weight: bold; vertical-align: bottom;">SI PPDB SMK</h3>            
						</dir>
					</div>
				</div>
			</div>
			<div class="main-header-right row">
				<div class="mobile-sidebar">
					<div class="media-body text-right switch-sm">
						<label class="switch">
							<input type="checkbox" id="sidebar-toggle" checked>
							<span class="switch-state"></span>
						</label>
					</div>
				</div>
				<div class="nav-right col">
					<ul class="nav-menus">
						<li class="onhover-dropdown">
							<div class="media  align-items-center">
								<img class="align-self-center pull-right mr-2"
								src="../../../lib/assets/images/dashboard/user.png" alt="header-user" />
								<div class="media-body">
									<h6 class="m-0 txt-dark f-16">

										<i class="fa fa-angle-down pull-right ml-2"></i>
									</h6>
								</div>
							</div>
							<ul class="profile-dropdown onhover-show-div p-20">
								<li>
									<a href="../../../?logout='1'">
										<i class="icon-power-off"></i> Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="d-lg-none mobile-toggle">
						<i class="icon-more"></i>
					</div>
				</div>
			</div>
		</div>
		<!--Page Header Ends-->

		<!--Page Body wrapper Start-->
		<div class="page-body-wrapper">

			<!--Page Sidebar Start-->
			<div class="page-sidebar custom-scrollbar">
				<div class="sidebar-user text-center">
					<div>
						<img class="img-50 rounded-circle" src="../../../lib/assets/images/dashboard/user.png" alt="#">
					</div>
					<h6 class="mt-3 f-12">
						<?php
						while($nama = $getNama->fetch_array()) {						
							echo $nama['nama'];
						}
						?>
					</h6>
				</div>
				<ul class="sidebar-menu">

					<li class="active">
						<div class="sidebar-title">SI PPDB SMK</div>						
						<?php
						echo $data;
						?>
					</li>
				</ul>
				<br><br><br><br>
				<div class="sidebar-widget text-center">
					<div class="sidebar-widget-top">
						<h6 class="mb-2 fs-14">Ada Kendala?</h6>
						<i class="icon-bell"></i>
					</div>
					<div class="sidebar-widget-bottom p-20 m-20">
						<?php echo $report; ?>
					</div>
				</div>
			</div>
			<!--Page Sidebar Ends-->

			<!--Page Body Start-->
			<div class="page-body">
				<!-- Container-fluid starts -->
				<div class="container-fluid">
					<div class="page-header">
						<div class="row">
							<div class="col-lg-6"> 
								<h5>
									PROFIL									
								</h5>
							</div>
							<div class="col-lg-6">
								<ol class="breadcrumb pull-right">
									<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
									<li class="breadcrumb-item">PESERTA</li>
									<li class="breadcrumb-item active">PROFIL</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<!-- Container-fluid Ends -->

				<!-- Container-fluid starts -->
				<div class="container-fluid">
					<div class="row">   

						<div class="col-md-12" style="margin-bottom: 30px">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fotoModal">
								TAMBAH/GANTI PROFIL
							</button>

							<div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modalLabel">Tambah/Ganti Profil</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">										
											<?php
											if($check->num_rows == 0){
												echo '
												<form method="POST" action="../../../backend/peserta/profil/create-or-update.php">
												<div class="form-group">
												<label>Tempat Lahir</label>
												<input type="text" class="form-control" name="tempat_lahir">
												</div>
												<div class="form-group">
												<label>Tanggal Lahir</label>
												<input type="date" class="form-control" name="tanggal_lahir">
												</div>
												<div class="form-group">
												<label>Nama Ayah</label>
												<input type="text" class="form-control" name="nama_ayah">
												</div>
												<div class="form-group">
												<label>Nama Ibu</label>
												<input type="text" class="form-control" name="nama_ibu">
												</div>
												<div class="form-group">
												<label>Alamat</label>
												<input type="text" class="form-control" name="alamat">
												</div>
												<div class="form-group">
												<button type="submit" class="btn btn-primary" name="upload" style="width: 100%" >Submit</button>
												</div>
												</form>';
											} else {
												while($profil = $getData->fetch_array()) {
													echo '
													<form method="POST" action="../../../backend/peserta/profil/create-or-update.php">
													<div class="form-group">
													<label>Tempat Lahir</label>
													<input type="text" class="form-control" name="tempat_lahir" value="'.$profil['tempat_lahir'].'">
													</div>
													<div class="form-group">
													<label>Tanggal Lahir</label>
													<input type="date" class="form-control" name="tanggal_lahir" value="'.$profil['tanggal_lahir'].'">
													</div>
													<div class="form-group">
													<label>Nama Ayah</label>
													<input type="text" class="form-control" name="nama_ayah" value="'.$profil['nama_ayah'].'">
													</div>
													<div class="form-group">
													<label>Nama Ibu</label>
													<input type="text" class="form-control" name="nama_ibu" value="'.$profil['nama_ibu'].'">
													</div>
													<div class="form-group">
													<label>Alamat</label>
													<input type="text" class="form-control" name="alamat" value="'.$profil['alamat'].'">
													</div>
													<div class="form-group">
													<button type="submit" class="btn btn-primary" name="upload" style="width: 100%" >Submit</button>
													</div>
													</form>';
												}
											}											
											?>												
										</div>
									</div>
								</div>
							</div>
						</div>
						<br />						
						<br>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header bg-primary text-white">
									PROFIL
								</div>
								<div class="card-body">									
									<?php
									if($check->num_rows == 0){
										echo '
										<form>
										<div class="form-group">
										<label>Tempat Lahir</label>
										<input type="text" class="form-control" readonly>
										</div>
										<div class="form-group">
										<label>Tanggal Lahir</label>
										<input type="date" class="form-control" readonly>
										</div>
										<div class="form-group">
										<label>Nama Ayah</label>
										<input type="text" class="form-control" readonly>
										</div>
										<div class="form-group">
										<label>Nama Ibu</label>
										<input type="text" class="form-control" readonly>
										</div>
										<div class="form-group">
										<label>Alamat</label>
										<input type="text" class="form-control" readonly>
										</div>
										</form>
										';
									} else {
										while($profilRead = $getDatas->fetch_array()) {
											echo '
											<form>
											<div class="form-group">
											<label>Tempat Lahir</label>
											<input type="text" class="form-control" readonly value="'.$profilRead['tempat_lahir'].'">
											</div>
											<div class="form-group">
											<label>Tanggal Lahir</label>
											<input type="date" class="form-control" readonly  value="'.$profilRead['tanggal_lahir'].'">
											</div>
											<div class="form-group">
											<label>Nama Ayah</label>
											<input type="text" class="form-control" readonly  value="'.$profilRead['nama_ayah'].'">
											</div>
											<div class="form-group">
											<label>Nama Ibu</label>
											<input type="text" class="form-control" readonly  value="'.$profilRead['nama_ibu'].'">
											</div>
											<div class="form-group">
											<label>Alamat</label>
											<input type="text" class="form-control" readonly  value="'.$profilRead['alamat'].'">
											</div>
											</form>
											';
										}
									}									
									?>
								</div>
							</div>
						</div>

						<script type="text/javascript">

						</script>

					</div>
					<!-- Container-fluid Ends -->
				</div>
				<!--Page Body Ends-->
			</div>

		</div>

	</div>
	<!--Page Body wrapper Ends-->
</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<!-- Bootstrap js-->
<!-- owlcarousel js-->
<script src="../../../lib/assets/js/owlcarousel/owl.carousel.js"></script>
<!-- Sidebar jquery-->    
<script src="../../../lib/assets/js/sidebar-menu.js"></script>
<!-- Theme js-->
<script src="../../../lib/assets/js/script.js"></script>
<!-- Counter js-->
<script src="../../../lib/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="../../../lib/assets/js/counter/jquery.counterup.min.js"></script>
<script src="../../../lib/assets/js/counter/counter-custom.js"></script>


</body>

</html>
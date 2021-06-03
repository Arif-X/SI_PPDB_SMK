<?php 

session_start(); 

if (!isset($_SESSION['uid'])) {
	$_SESSION['msg'] = "";
	header('location: ../../../frontend/auth/login.php');
}

include_once '../../../backend/server/connection.php';
include_once '../menu/menu.php';

include_once '../../../backend/middleware/admin.php';

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

	<title>Manajemen Jurusan</title>

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
	<link href="../../../lib/import/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="../../../lib/import/datatables/Bootstrap-4-4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../lib/import/datatables/FixedColumns-3.3.2/css/fixedColumns.bootstrap4.min.css" rel="stylesheet">

	<script src="../../../lib/import/datatables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../../../lib/import/datatables/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>
	<script src="../../../lib/import/datatables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
	<script src="../../../lib/import/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
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
									MANAJEMEN JURUSAN					
								</h5>
							</div>							

							<div class="col-lg-6">
								<ol class="breadcrumb pull-right">
									<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
									<li class="breadcrumb-item">ADMIN</li>
									<li class="breadcrumb-item active">MANAJEMEN JURUSAN</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<!-- Container-fluid Ends -->

				<!-- Container-fluid starts -->
				<div class="container-fluid">
					<div style="margin-bottom: 30px">
						<div class="mt-2 mb-3">
							<button type="button" class="btn btn-primary" data-toggle="modal" id="create">Tambah Jurusan</button>
						</div>
						<div class="modal fade bd-example-modal-lg" id="ajaxModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modelHeading">Tambah Jurusan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">

												<form name="formData" id="formData">
													<input type="hidden" name="id_jurusan" id="id_jurusan" value>

													<div class="form-group">
														<label>Sekolah</label>
														<select class="selectpicker form-control" name="id_sekolah" id="id_sekolah" data-live-search="true">
															<option value="" selected="false">Pilih Sekolah</option>
															<?php
															include_once '../../../backend/admin/jurusan/get-id-sekolah.php';
															while($sekolah = $getSekolah->fetch_array()) {	echo '<option value="' . $sekolah['id_sekolah'] . '">' . $sekolah['nama_sekolah'] . '</option>';}				
															?>
														</select>
													</div>

													<div class="form-group">
														<label for="">Nama Jurusan</label>
														<input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" required>
													</div>

													<button class="btn btn-primary btn-sm" id="saveBtn" style="width: 100%">Simpan</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="modal fade bd-example-modal-lg" id="profilModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalProfilHeading">Edit Profil Sekolah</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">

												<form name="formDataProfil" id="formDataProfil">
													<input type="hidden" name="id_jurusan" id="profil_id_jurusan" value>

													<div class="form-group">
														<label for="">Visi</label>
														<input type="text" name="visi" id="visi" class="form-control" required>
													</div>

													<div class="form-group">
														<label for="">Misi</label>
														<input type="text" name="misi" id="misi" class="form-control" required>
													</div>

													<div class="form-group">
														<label for="">Kaprodi</label>
														<input type="text" name="kaprodi" id="kaprodi" class="form-control" required>
													</div>

													<button class="btn btn-primary btn-sm" id="saveProfilBtn" style="width: 100%">Simpan</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="modal fade bd-example-modal-lg" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="deleteHeading">Hapus</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">

												<form name="formDelete" id="formDelete">
													<input type="hidden" name="id_jurusan" id="id_delete">
													<h3>Ingin Menghapus Data <strong id="datas"></strong>?</h3>
													<button class="btn btn-danger btn-sm" id="deleteBtn" style="width: 100%">Hapus</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="table-responsive">
							<table class="table table-bordered" id="tables">
								<thead>
									<tr>
										<th>ID Jurusan</th>
										<th>Sekolah</th>
										<th>Nama Jurusan</th>
										<th>Profil Jurusan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>					

				</div>
				<!-- Container-fluid Ends -->
			</div>
			<!--Page Body Ends-->
		</div>

	</div>

</div>
<!--Page Body wrapper Ends-->
</div>

<script>
	var tabel = null;

	$(document).ready(function() {
		tabel = $('#tables').DataTable({
			"processing": true,
			"serverSide": true,
			"ordering": true, 
			"order": [[ 1, 'asc' ]], 
			"ajax":
			{
				"url": "../../../backend/admin/jurusan/view.php", 
				"type": "POST"
			},
			"deferRender": true,
			"aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], 
			"columns": [
			{ "data": "id_jurusan" }, 
			{ "data": "nama_sekolah" }, 
			{ "data": "nama_jurusan" },
			{ 
				"render": function ( data, type, row ) { 
					var html  = "<a href='javascript:void(0)' data-toggle='tooltip' data-id='" + row.id_jurusan + "' data-original-title='profil' class='btn btn-primary btn-sm profil'>Lihat/Edit Profil Jurusan</a>"

					return html
				}
			},
			{ 
				"render": function ( data, type, row ) { 
					var html  = "<a href='javascript:void(0)' data-toggle='tooltip' data-id='" + row.id_jurusan + "' data-original-title='Edit' class='edit btn btn-primary btn-sm editData'>Edit</a> | " 
					html += "<a href='javascript:void(0)' data-toggle='tooltip' data-id='" + row.id_jurusan + "' data-original-title='Delete' class='delete btn btn-danger btn-sm deleteData'>Hapus</a>"

					return html
				}
			},
			],
		});

		$('body').on('click', '.editData', function () {
			var id_jurusan = $(this).data('id');
			$.ajax({
				url: "../../../backend/admin/jurusan/get-id.php/?id_jurusan=" + id_jurusan,
				type: 'GET',
				dataType: 'json',
				success: function(data) {     
					if (data) {
						$('#modelHeading').html("Edit Jurusan");
						$('#ajaxModal').modal('show');
						$('#id_jurusan').val(data[0].id_jurusan);
						$('#id_jurusan').attr('readonly', 'true');
						$('select[name=id_sekolah]').val(data[0].id_sekolah);
						$('.selectpicker').selectpicker('refresh');
						$('#nama_jurusan').val(data[0].nama_jurusan);
					}
				},
				error: function() {
					alert("No");
				}
			});
		});		

		$('body').on('click', '.deleteData', function () {
			var id_jurusan = $(this).data('id');
			$.ajax({
				url: "../../../backend/admin/jurusan/get-id.php/?id_jurusan=" + id_jurusan,
				type: 'GET',
				dataType: 'json',
				success: function(data) {     
					if (data) {
						$('#deleteHeading').html("Hapus Jurusan");
						$('#deleteModal').modal('show');
						$('#id_delete').val(data[0].id_jurusan);
						$('#id_delete').attr('readonly', 'true');
						$('#datas').html(' Jurusan ' + data[0].nama_jurusan + ' di Sekolah ' + data[0].nama_sekolah);
					}
				},
				error: function() {
					alert("No");
				}
			});
		});

		$('#create').click(function () {
			$('#saveBtn').val("create");
			$('#id_jurusan').val('');
			$('#formData').trigger("reset");
			$('select[name=id_sekolah]').val('');
			$('.selectpicker').selectpicker('refresh');
			$('#modelHeading').html("Tambah Jurusan");
			$('#ajaxModal').modal('show');
		});

		$('#deleteBtn').click(function (e) {
			e.preventDefault();
			$.ajax({
				data: $('#formDelete').serialize(),
				url: "../../../backend/admin/jurusan/delete.php",
				type: "POST",
				dataType: 'json',
				success: function (data) {
					$('#formDelete').trigger("reset");
					$('#deleteModal').modal('hide');
					tabel.draw();
				},
				error: function (data) {
					console.log('Error:', data);
					$('#deleteBtn').html('Simpan');
				}
			});
		});

		$('#saveBtn').click(function (e) {
			e.preventDefault();

			$.ajax({
				data: $('#formData').serialize(),
				url: "../../../backend/admin/jurusan/create-or-update.php",
				type: "POST",
				dataType: 'json',
				success: function (data) {
					$('#formData').trigger("reset");
					$('#ajaxModal').modal('hide');
					tabel.draw();
				},
				error: function (data) {
					console.log('Error:', data);
					$('#saveBtn').html('Simpan');
				}
			});
		});

		$('body').on('click', '.profil', function () {
			var id_jurusan = $(this).data('id');
			$.ajax({
				url: "../../../backend/admin/jurusan/get-id-profil.php/?id_jurusan=" + id_jurusan,
				type: 'GET',
				dataType: 'json',
				success: function(data) {     
					if (data) {
						$('#modalProfilHeading').html("Edit Profil Jurusan");
						$('#profilModal').modal('show');
						$('#profil_id_jurusan').val(data[0].id_jurusan);
						$('#profil_id_jurusan').attr('readonly', 'true');							
						$('#visi').val(data[0].visi);
						$('#misi').val(data[0].misi);
						$('#kaprodi').val(data[0].kaprodi);
					}
				},
				error: function() {
					alert("No");
				}
			});
		});

		$('#saveProfilBtn').click(function (e) {
			e.preventDefault();

			$.ajax({
				data: $('#formDataProfil').serialize(),
				url: "../../../backend/admin/jurusan/create-or-update-profil.php",
				type: "POST",
				dataType: 'json',
				success: function (data) {
					$('#formDataProfil').trigger("reset");
					$('#profilModal').modal('hide');
					tabel.draw();
				},
				error: function (data) {
					console.log('Error:', data);
					$('#saveProfilBtn').html('Simpan');
				}
			});
		});
	});		
</script>

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
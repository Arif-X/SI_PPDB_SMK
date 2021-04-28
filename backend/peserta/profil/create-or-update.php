<?php

session_start();
include '../../server/connection.php';
$uid = $_SESSION['uid'];
$tempatLahir = $_POST['tempat_lahir'];
$tanggalLahir = $_POST['tanggal_lahir'];
$namaAyah = $_POST['nama_ayah'];
$namaIbu = $_POST['nama_ibu'];
$alamat = $_POST['alamat'];
$check = mysqli_query($connection, "SELECT * FROM profil_user WHERE uid='$uid'");
if($check->num_rows == 0){
	$query = mysqli_query($connection, "INSERT INTO profil_user(uid, tempat_lahir, tanggal_lahir, nama_ayah, nama_ibu, alamat) VALUES ('$uid', '$tempatLahir', '$tanggalLahir', '$namaAyah', '$namaIbu', '$alamat')");
	if($query){
		header("Location: ../../../frontend/peserta/profil/");
	}
} else {
	$query = mysqli_query($connection, "UPDATE profil_user SET tempat_lahir='$tempatLahir', tanggal_lahir='$tanggalLahir', nama_ayah='$namaAyah', nama_ibu='$namaIbu', alamat='$alamat' WHERE uid = $uid");
	if($query){
		header("Location: ../../../frontend/peserta/profil/");
	}
}

?>

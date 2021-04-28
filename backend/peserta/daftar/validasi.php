<?php

$uid = $_SESSION['uid'];

$errors = array(); 

$checkProfil = mysqli_query($connection, "SELECT * FROM profil_user WHERE uid='$uid'");
$checkFoto = mysqli_query($connection, "SELECT * FROM foto WHERE uid='$uid'");
$checkIjazah = mysqli_query($connection, "SELECT * FROM ijazah WHERE uid='$uid'");

if($checkProfil->num_rows == 0){
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('Hrap Isi Profil Sebelum Mendaftar');
		window.location.href='../../../frontend/peserta/profil/';
		</script>");
} elseif ($checkFoto->num_rows == 0) {
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('Hrap Isi Pasfoto Sebelum Mendaftar');
		window.location.href='../../../frontend/peserta/pasfoto/';
		</script>");
} elseif ($checkIjazah->num_rows == 0) {
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('Hrap Isi Ijazah Sebelum Mendaftar');
		window.location.href='../../../frontend/peserta/ijazah/';
		</script>");
} else {
	header("Location: ");
}

?>
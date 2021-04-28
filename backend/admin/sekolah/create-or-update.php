<?php
include "../../server/connection.php"; 

$id_sekolah = $_POST['id_sekolah'];
$nis = $_POST['nis'];
$nama_sekolah = $_POST['nama_sekolah'];

$check = mysqli_query($connection, "SELECT * FROM sekolah WHERE id_sekolah='$id_sekolah'");

if($check->num_rows == 0){
	$result = mysqli_query($connection, "INSERT INTO sekolah(nis, nama_sekolah) VALUES ('$nis', '$nama_sekolah')");
	header('Content-Type: application/json');
	echo json_encode($result); 
} else {
	$result = mysqli_query($connection, "UPDATE sekolah SET nis='$nis', nama_sekolah='$nama_sekolah' WHERE id_sekolah = $id_sekolah");
	header('Content-Type: application/json');
	echo json_encode($result); 
}
?>
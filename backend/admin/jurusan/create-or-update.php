<?php
include "../../server/connection.php"; 

$id_jurusan = $_POST['id_jurusan'];
$id_sekolah = $_POST['id_sekolah'];
$nama_jurusan = $_POST['nama_jurusan'];

$check = mysqli_query($connection, "SELECT * FROM jurusan WHERE id_jurusan='$id_jurusan'");

if($check->num_rows == 0){
	$result = mysqli_query($connection, "INSERT INTO jurusan(id_sekolah, nama_jurusan) VALUES ('$id_sekolah', '$nama_jurusan')");
	header('Content-Type: application/json');
	echo json_encode($result); 
} else {
	$result = mysqli_query($connection, "UPDATE jurusan SET id_sekolah='$id_sekolah', nama_jurusan='$nama_jurusan' WHERE id_jurusan = $id_jurusan");
	header('Content-Type: application/json');
	echo json_encode($result); 
}
?>
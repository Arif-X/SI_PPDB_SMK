<?php
include "../../server/connection.php"; 

$id_sekolah = $_POST['id_sekolah'];
$id_jurusan = $_POST['id_jurusan'];
$kapasitas = $_POST['kapasitas'];

$check = mysqli_query($connection, "SELECT * FROM kapasitas WHERE id_sekolah='$id_sekolah' AND id_jurusan='$id_jurusan'");

if($check->num_rows == 0){
	$result = mysqli_query($connection, "INSERT INTO kapasitas(id_sekolah, id_jurusan, kapasitas) VALUES ('$id_sekolah', '$id_jurusan', '$kapasitas')");
	header('Content-Type: application/json');
	echo json_encode($result); 
} else {
	$result = mysqli_query($connection, "UPDATE kapasitas SET kapasitas='$kapasitas', id_sekolah='$id_sekolah', id_jurusan='$id_jurusan' WHERE id_kapasitas='$id_kapasitas'");
	header('Content-Type: application/json');
	echo json_encode($result); 
}
?>
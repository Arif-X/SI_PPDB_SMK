<?php

session_start();
include '../../server/connection.php';
$uid = $_SESSION['uid'];
$id_jurusan = $_POST['id_jurusan'];
$check = mysqli_query($connection, "SELECT * FROM mendaftar_di WHERE (id_jurusan='$id_jurusan' AND uid='$uid')");
$max = mysqli_query($connection, "SELECT count(id) FROM mendaftar_di WHERE uid='$uid'");
$maxRow = mysqli_fetch_array($max);
$totalMaxRow = $maxRow[0];

$cap = mysqli_query($connection, "SELECT * FROM kapasitas WHERE (id_jurusan='$id_jurusan' AND kapasitas=0)");
if($check->num_rows == 0){
	if($totalMaxRow < 3){
		if($cap->num_rows == 0){
			$query = mysqli_query($connection, "INSERT INTO mendaftar_di(uid, id_jurusan) VALUES ('$uid', '$id_jurusan')");
		}
	} else {
		echo "Error";
	}
}

?>

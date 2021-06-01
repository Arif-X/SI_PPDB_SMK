<?php

session_start();
include '../../server/connection.php';
$uid = $_SESSION['uid'];
$id_jurusan = $_POST['id_jurusan'];
$check = mysqli_query($connection, "SELECT * FROM mendaftar_di WHERE (id_jurusan='$id_jurusan' AND uid='$uid')");
$max = mysqli_query($connection, "SELECT * FROM mendaftar_di WHERE uid='$uid'");
if($check->num_rows == 0){
	if($max->num_rows == 0){
	$query = mysqli_query($connection, "INSERT INTO mendaftar_di(uid, id_jurusan) VALUES ('$uid', '$id_jurusan')");
	}
}

?>

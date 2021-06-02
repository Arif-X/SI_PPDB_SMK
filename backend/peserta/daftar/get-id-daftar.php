<?php
include "../../server/connection.php"; 

$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT jurusan.nama_jurusan, sekolah.nama_sekolah, kapasitas.kapasitas, mendaftar_di.* FROM mendaftar_di INNER JOIN jurusan ON jurusan.id_jurusan=mendaftar_di.id_jurusan INNER JOIN sekolah ON sekolah.id_sekolah=jurusan.id_sekolah INNER JOIN kapasitas ON kapasitas.id_jurusan=jurusan.id_jurusan WHERE mendaftar_di.id='$id'");

$rows = array();
while($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}

header('Content-Type: application/json');
echo json_encode($rows); 

?>
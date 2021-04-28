<?php
include "../../server/connection.php"; 

$id_sekolah = $_GET['id_sekolah'];

$result = mysqli_query($connection, "SELECT * FROM sekolah WHERE id_sekolah='$id_sekolah'");

$rows = array();
while($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}

// header('Content-Type: application/json');
echo json_encode($rows); 

?>
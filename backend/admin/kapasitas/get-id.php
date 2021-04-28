<?php
include "../../server/connection.php"; 

$id_jurusan = $_GET['id_jurusan'];

$result = mysqli_query($connection, "SELECT * FROM kapasitas WHERE id_jurusan='$id_jurusan'";

$rows = array();
while($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}

// header('Content-Type: application/json');
echo json_encode($rows); 

?>
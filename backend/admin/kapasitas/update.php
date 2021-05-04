<?php
include "../../server/connection.php"; 

$id_jurusan = $_POST['id_jurusan'];
$kapasitas = $_POST['kapasitas'];
$result = mysqli_query($connection, "UPDATE kapasitas SET kapasitas='$kapasitas' WHERE id_jurusan='$id_jurusan'");
header('Content-Type: application/json');
echo json_encode($result);
?>
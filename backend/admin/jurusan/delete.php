<?php
include "../../server/connection.php"; 

$id_jurusan = $_POST['id_jurusan'];

$result = mysqli_query($connection, "DELETE FROM jurusan WHERE id_jurusan='$id_jurusan'");

header('Content-Type: application/json');
echo json_encode($result); 

?>
<?php
include "../../server/connection.php"; 

$id_sekolah = $_POST['id_sekolah'];

$result = mysqli_query($connection, "DELETE FROM sekolah WHERE id_sekolah='$id_sekolah'");

header('Content-Type: application/json');
echo json_encode($result); 

?>
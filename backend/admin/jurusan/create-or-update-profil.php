<?php
include "../../server/connection.php"; 

$id_jurusan = $_POST['id_jurusan'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];
$kaprodi = $_POST['kaprodi'];

$result = mysqli_query($connection, "UPDATE profil_jurusan SET visi='$visi', misi='$misi', kaprodi='$kaprodi' WHERE id_jurusan = '$id_jurusan'");
header('Content-Type: application/json');
echo json_encode($result); 

?>


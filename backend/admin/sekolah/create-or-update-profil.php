<?php
include "../../server/connection.php"; 

$id_sekolah = $_POST['id_sekolah'];
$alamat = $_POST['alamat'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];
$kepala_sekolah = $_POST['kepala_sekolah'];

$result = mysqli_query($connection, "UPDATE profil_sekolah SET alamat='$alamat', visi='$visi', misi='$misi', alamat='$alamat', kepala_sekolah='$kepala_sekolah' WHERE id_sekolah = $id_sekolah");
header('Content-Type: application/json');
echo json_encode($result); 

?>
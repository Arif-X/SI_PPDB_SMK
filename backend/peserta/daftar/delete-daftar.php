<?php
include "../../server/connection.php"; 

$uid = $_POST['uid'];
$id = $_POST['id'];

$result = mysqli_query($connection, "DELETE FROM mendaftar_di WHERE (id='$id' AND uid='$uid')");

header('Content-Type: application/json');
echo json_encode($result); 

?>
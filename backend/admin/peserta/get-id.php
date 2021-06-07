<?php
include "../../server/connection.php"; 

$uid = $_GET['uid'];

$result = mysqli_query($connection, "SELECT * FROM profil_user WHERE uid='$uid'");

$rows = array();
while($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}

// header('Content-Type: application/json');
echo json_encode($rows); 

?>
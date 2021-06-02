<?php

session_start(); 

include 'backend/server/connection.php';

$uid = $_SESSION['uid'];

$result = mysqli_query($connection, "SELECT level FROM user WHERE uid='$uid'");

if($result->fetch_array()['level'] == 'Admin'){
	header('Location: frontend/admin/index.php');
} else {
	header('Location: frontend/peserta/index.php');
}

?>
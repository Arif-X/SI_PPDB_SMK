<?php 
session_start(); 

if (!isset($_SESSION['uid'])) {
	$_SESSION['msg'] = "";
	header('location: ../../frontend/auth/login.php');
} else {
	header('location: sekolah/');
}

?>

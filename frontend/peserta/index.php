<?php 
session_start(); 

if (!isset($_SESSION['uid'])) {
	$_SESSION['msg'] = "";
	header('location: ../../../backend/auth/login.php');
} else {
	header('location: profil/');
}

?>
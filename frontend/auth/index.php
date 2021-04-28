<?php 
session_start(); 

if (!isset($_SESSION['nisn'])) {
	$_SESSION['msg'] = "";
	header('location: login.php');
}

?>
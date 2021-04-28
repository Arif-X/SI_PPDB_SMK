<?php 
session_start(); 

if (!isset($_SESSION['uid'])) {
	$_SESSION['msg'] = "";
	header('location: ../../../frontend/auth/login.php');
}

include_once '../../../backend/server/connection.php';
include '../../../backend/peserta/daftar/validasi.php';

?>
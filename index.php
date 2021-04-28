<?php 
session_start(); 

if (!isset($_SESSION['uid'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: frontend/auth/login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['uid']);
	header('location: frontend/auth/login.php');
}
?>
<a  class="nav-link text-white" href="?logout='1'">Logout</a>

<?php
echo $_SESSION['uid'];
echo basename('file/pasfoto/hello');
?>
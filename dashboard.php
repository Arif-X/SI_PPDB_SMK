<?php 
session_start(); 

include 'backend/server/connection.php';

if (!isset($_SESSION['uid'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: frontend/auth/login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['uid']);
	header('location: frontend/auth/login.php');
}

$uid = $_SESSION['uid'];

$result = mysqli_query($connection, "SELECT level FROM user WHERE uid='$uid'");

if($result->fetch_array()['level'] == 'Admin'){
	header('Location: frontend/admin/index.php');
} else {
	header('Location: frontend/peserta/index.php');
}

?>
<a  class="nav-link text-white" href="?logout='1'">Logout</a>

<?php
echo $_SESSION['uid'];
echo basename('file/pasfoto/hello');
?>
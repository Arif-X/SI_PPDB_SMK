<?php

$uid = $_SESSION['uid'];

$result = mysqli_query($connection, "SELECT level FROM user WHERE uid='$uid'");

if($result->fetch_array()['level'] == 'Peserta'){
	header('Location: ');
} else {
	header('Location: ../../../frontend/admin/');
}

?>
<?php

// session_start();

// include '../../server/connection.php';

$uid = $_SESSION['uid'];

$query = "SELECT * FROM profil_user WHERE uid='$uid';";

$getData = $connection->query($query);

$queryRead = "SELECT * FROM profil_user WHERE uid='$uid';";

$getDatas = $connection->query($queryRead);

$queryNama = "SELECT nama FROM user WHERE uid='$uid';";

$getNama = $connection->query($queryNama);

$check = mysqli_query($connection, "SELECT * FROM profil_user WHERE uid='$uid'");

?>
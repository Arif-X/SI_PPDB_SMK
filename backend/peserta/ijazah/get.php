<?php

// session_start();

// include '../../server/connection.php';

$uid = $_SESSION['uid'];

$query = "SELECT * FROM ijazah WHERE uid='$uid';";

$getData = $connection->query($query);

$queryNama = "SELECT nama FROM user WHERE uid='$uid';";

$getNama = $connection->query($queryNama);

$check = mysqli_query($connection, "SELECT * FROM ijazah WHERE uid='$uid'");

?>
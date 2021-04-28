<?php

$databaseHost = 'localhost';
$databaseName = 'si_ppdb_smk';
$databaseUsername = 'root';
$databasePassword = '';

$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if($connection){
	// echo "sep";
} else {
	echo "error";
}

?>
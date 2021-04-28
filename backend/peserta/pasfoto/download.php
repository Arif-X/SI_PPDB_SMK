<?php
session_start();

include_once("../../server/connection.php");

if(isset($_GET['uid'])){
	$uid = $_GET['uid'];
	if ($uid == $_SESSION['uid']){
		$getResult = mysqli_query($connection, "SELECT pasphoto FROM foto WHERE uid='$uid'");
		while($data = mysqli_fetch_array($getResult)){
			$url = $data['pasphoto'];
		}
		clearstatcache();
		if(file_exists($url)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename="'.basename($url).'"');
			header('Content-Length: ' . filesize($url));
			header('Pragma: public');
			flush();
			readfile($url,true);
			die();
			header("Location: ../../../frontend/peserta/pasfoto/");
		} else {
			echo "File path does not exist.";
		}
	} else {
		echo "Error";
	}
}
echo "File path is not defined.";

?>
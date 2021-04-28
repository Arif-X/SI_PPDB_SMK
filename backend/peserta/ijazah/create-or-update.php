<?php

$uploadDir = '../../../file/ijazah/';
if(isset($_POST['upload'])){		
	$fileName = $_FILES['userfile']['name'];
	$tmpName = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	$filePath = $uploadDir . $fileName;
	$asal = $_POST['asal'];
	$result = move_uploaded_file($tmpName, $filePath);
	if($result){
		session_start();
		include '../../server/connection.php';
		$uid = $_SESSION['uid'];
		$check = mysqli_query($connection, "SELECT * FROM ijazah WHERE uid='$uid'");
		if($check->num_rows == 0){
			$query = mysqli_query($connection, "INSERT INTO ijazah(uid, ijazah, sekolah_asal) VALUES ('$uid', '$filePath', '$asal')");
			if($query){
				header("Location: ../../../frontend/peserta/ijazah/");
			}
		} else {
			$query = mysqli_query($connection, "UPDATE ijazah SET ijazah='$filePath', sekolah_asal='$asal' WHERE uid = $uid");
			if($query){
				header("Location: ../../../frontend/peserta/ijazah/");
			}
		}		
	} else {
		echo "Error";
	}
}

?>

<?php

$uploadDir = '../../../file/pasfoto/';
if(isset($_POST['upload'])){		
	$fileName = $_FILES['userfile']['name'];
	$tmpName = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	$filePath = $uploadDir . $fileName;
	shell_exec("sudo chmod 777 ../../../file/pasfoto");
	$result = move_uploaded_file($tmpName, $filePath);	
	if($result){
		session_start();
		include '../../server/connection.php';
		$uid = $_SESSION['uid'];
		$check = mysqli_query($connection, "SELECT * FROM foto WHERE uid='$uid'");
		if($check->num_rows == 0){
			$query = mysqli_query($connection, "INSERT INTO foto(uid, pasphoto) VALUES ('$uid', '$filePath')");
			if($query){
				header("Location: ../../../frontend/peserta/pasfoto/");
			}
		} else {
			$query = mysqli_query($connection, "UPDATE foto SET pasphoto='$pasphoto' WHERE uid = $uid");
			if($query){
				header("Location: ../../../frontend/peserta/pasfoto/");
			}
		}		
	} else {
		echo "Error";
	}
}

?>

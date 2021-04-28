<?php

// session_start();

$nisn = "";
$peserta = "Peserta";
$errors = array(); 

if (isset($_POST['register'])) {

  $nisn = mysqli_real_escape_string($connection, $_POST['nisn']);
  $nama = mysqli_real_escape_string($connection, $_POST['nama']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password_1 = mysqli_real_escape_string($connection, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($connection, $_POST['password_2']);

  if (empty($nisn)) { array_push($errors, "NISN is required"); }
  if (empty($nama)) { array_push($errors, "Nama is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM user WHERE nisn='$nisn' OR email='$email' LIMIT 1";
  $result = mysqli_query($connection, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['nisn'] === $nisn) {
      array_push($errors, "NISN/Email already exists");
    }
  }

  if (count($errors) == 0) {
    $password = $password_1;

    $query = "INSERT INTO user (nisn, nama, email, password, level) VALUES ('$nisn', '$nama', '$email', '$password', '$peserta')";
    mysqli_query($connection, $query);
    $_SESSION['nisn'] = $nisn;
    $_SESSION['success'] = "You are now logged in";
    header('location: ../../index.php');
  }
}

if (isset($_POST['login'])) {
  $uid = mysqli_real_escape_string($connection, $_POST['uid']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  if (empty($uid)) {
    array_push($errors, "UID is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = $password;
    $query = "SELECT * FROM user WHERE uid='$uid' OR nisn='$uid' AND password='$password'";
    $results = mysqli_query($connection, $query);
    if (mysqli_num_rows($results) == 1) {
      $getUid = $results->fetch_array()['uid'];
      $_SESSION['uid'] = $getUid;
      $_SESSION['success'] = "You are now logged in";
      header('location: ../../index.php');
    }else {
      array_push($errors, "Wrong NISN/Password Combination");
    }
  }
}

?>
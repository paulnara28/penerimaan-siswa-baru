<?php
$errors = array();

if (empty($_POST['username'])) {
	$errors['username'] = 'Username harus diisi';
}

if (empty($_POST['password'])) {
	$errors['password'] = 'Password harus diisi';
}

if (count($errors) === 0) {
	include "../lib/koneksi.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($link, $query);
	
	if (mysqli_num_rows($result) == 1) {
		session_start();
		$_SESSION['status']='Login';
		header("location: dashboard.php");
	} else {
		header("location: index.php");
	}
} else {
	include 'index.php';
}
?>
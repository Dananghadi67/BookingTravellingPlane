<?php
require('koneksi.php');

session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE username='$email'";
		$result = mysqli_query($koneksi, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($koneksi, $sql);
			if ($result) {
				echo "<script>alert('Registrasi Berhasil')</script>";
				header("Location: login.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
				header("Location: signup.php");
			}
		} else {
			echo "<script>alert('Maaf! Email Telah Digunakan')</script>";
			header("Location: signup.php");
		}
		
	} else {
		echo "<script>alert('Password Tidak Sama')</script>";
		header("Location: signup.php");
	}
}
?>

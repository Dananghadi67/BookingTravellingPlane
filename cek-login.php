<?php
require('koneksi.php');
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $akun = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($akun) >= 1) {
        foreach ($akun as $data) {
            if ($data['password'] == $password) {
                echo "";
                $_SESSION['username'] = $username;
                header("Location: daftar-tiket.php");
                die();
            } else {
                header("Location: login.php?error=yes");
                die();
            }
        }
    } else {
        header("Location: login.php?error=yes");
        die();
    }
} else {
    if ($_SESSION['username']) {
        header("Location: daftar-tiket.php");
        die();
    } else {
        header("Location: login.php");
        die();
    }
}
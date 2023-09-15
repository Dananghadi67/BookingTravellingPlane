<?php
require("koneksi.php");
date_default_timezone_set("Asia/Jakarta");
$nama = $_POST["nama"];
$email = $_POST["email"];
$nomor = $_POST["nomor"];
$kelamin = $_POST["kelamin"];
$pesawat = $_POST["pesawat"];
$asal = $_POST["asal"];
$tanggal = $_POST["tanggal"];
$kursi = $_POST["kursi"];
$kelas = $_POST["kelas"];
if (isset($_POST['warga'])) {
    $warga = $_POST['warga'];
} else {
    $warga = "WNA";
}
if (isset($_POST['deskripsi'])) {
    $deskripsi = $_POST['deskripsi'];
} else {
    $deskripsi = "";
}
$input = mysqli_query($koneksi, "INSERT INTO datatiket (nama,email,warga,nomor,kelamin,id_pesawat,idkota,tanggal,kursi,id_kelas,deskripsi) VALUES ('$nama','$email','$warga','$nomor','$kelamin','$pesawat','$asal','$tanggal','$kursi','$kelas','$deskripsi')");

if ($input) {
    header("Location: listpemesanan.php");
    exit;
} else {
    echo "data gagal diinput";
}
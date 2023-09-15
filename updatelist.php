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

$id = $_POST['id'];
$data = mysqli_query($koneksi, "UPDATE `datatiket` SET `nama`='$nama',`email`='$email',`warga`='$warga',`nomor`='$nomor',`kelamin`='$kelamin',`id_pesawat`='$pesawat',`idkota`='$asal',`tanggal`='$tanggal',`kursi`='$kursi',`id_kelas`='$kelas',`deskripsi`='$deskripsi' WHERE `datatiket`.`id_tiket` = $id;");

if ($data) {
    echo '<script>alert("Data berhasil diedit!");</script>';
    echo '<script>window.location = "listpemesanan.php";</script>';
  } else {
    echo '<script>alert("Gagal mengedit data!")</script>' . mysqli_error($koneksi);
  }



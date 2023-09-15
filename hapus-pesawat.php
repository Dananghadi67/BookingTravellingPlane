<?php
require('koneksi.php');

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  session_start();
}

if(isset($_GET['idp'])) {
  $pesawat  = mysqli_query($koneksi, "SELECT foto_pesawat From pesawat  WHERE id_pesawat  = '".$_GET['idp']."' ");
  $p = mysqli_fetch_object($pesawat );

  unlink('./pesawat /'.$p->foto_pesawat );

  $delete = mysqli_query($koneksi, "DELETE FROM pesawat WHERE id_pesawat = '" . $_GET['idp'] . "' ");
  echo '<script>window.location = "daftar-tiket.php";</script>';
}
?>

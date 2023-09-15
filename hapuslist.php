<?php
require('koneksi.php');

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM datatiket WHERE id_tiket=$id");

header("Location: listpemesanan.php");
exit;
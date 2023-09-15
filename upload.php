<?php
require('koneksi.php');
if (isset($_POST['submit_Pesawat'])) {
  // menampung inputan dari form
  $nama = $_POST['namaPesawat'];
  $asal = $_POST['asalPesawat'];
  $harga = $_POST['hargaPesawat'];
  $deskripsi = $_POST['deskripsiPesawat'];

  // menampung data file yang diupload
  $filename = $_FILES['fotoPesawat']['name'];
  $tmp_name = $_FILES['fotoPesawat']['tmp_name'];

  $type1 = explode('.', $filename);
  $type2 = $type1[1];

  $foto_Pesawat = 'pesawat' . time() . '.' . $type2;

  // menampung data format file yang diizinkan
  $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG', 'webp');
  move_uploaded_file($tmp_name, './pesawat/' . $foto_Pesawat);

  $insert = mysqli_query($koneksi, "INSERT INTO pesawat (nama_pesawat, harga_tiket_pesawat, foto_pesawat, deskripsi_pesawat) VALUES (
    '" . $nama . "',
    '" . $harga . "',
    '" . $foto_Pesawat . "',
    '" . $deskripsi . "'
)");


  if (!in_array($type2, $tipe_diizinkan)) {
    // Jika format file tidak ada di dalam tipe diizinkan
    echo '<script>alert("Format file tidak didukung!");</script>';
    echo '<script>window.location = "add-tiket.php";</script>';

  } else {
    // Jika format file sesuai dengan yang ada di dalam array tipe diizinkan
    //proses upload file sekaligus insert dalam database

   
    if ($insert) {
      echo '<script>window.location = "daftar-tiket.php";</script>';
      echo '<script>alert("Pesawat berhasil ditambahkan!");</script>';
    } else {
      echo '<script>alert("Gagal menambahkan Pesawat!")</script>';
    } 
  }
}

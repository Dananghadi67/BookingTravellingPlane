<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<?php
require('koneksi.php');
$pesawat = mysqli_query($koneksi, "SELECT * FROM pesawat WHERE id_pesawat = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($pesawat);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Edit Pesawat</title>
</head>

<body>

  <!-- Navbar -->
  <?php
  require(__DIR__ . '/komponen/navbar.php');
  ?>

  <!-- content -->
  <div class="container py-5 d-grid gap-5">
    <div class="row pt-5">
      <div class="col-12 text-center">
        <h2>Edit Pesawat</h2>
      </div>
    </div>
    <form enctype="multipart/form-data" method="POST" action="" class="row card shadow-sm p-5 g-3">
      <div class="col-md-5">
        <label for="inputEmail4" class="form-label">Nama Pesawat <sup style="color: red;">*</sup></label>
        <input type="text" name="namaPesawat" class="form-control" value="<?php echo $p->nama_pesawat ?>" id="inputEmail4">
      </div>
      <div class="col-8">
        <label for="gambar" class="form-label">Gambar Pesawat</label> <br>
        <img src="pesawat/<?php echo $p->foto_pesawat ?>" alt="" width="200px">
        <input type="hidden" name="foto" value="<?php echo $p->foto_pesawat ?>">
        <input type="file" class="form-control mt-2" name="gambar"accept="image/*" id="gambar" value="<?php echo $p->foto_pesawat ?>">
      </div>
      
      <div class="col-md-5">
        <label for="inputCity" class="form-label">Harga Pesawat <sup style="color: red;">*</sup></label>
        <input type="number" value="<?php echo $p->harga_tiket_pesawat?>" name="hargaPesawat" class="form-control" id="inputCity">
      </div>
      <div class="col-md-5">
        <label for="deskripsiProduk" class="form-label">Deskripsi Pesawat <sup style="color: red;">*</sup></label>
        <textarea name="deskripsiPesawat" class="form-control" id="deskripsiPesawat" rows="10"><?php echo $p->deskripsi_pesawat ?></textarea>
      </div>
      <div class="col-12">
        <button type="submit" name="submit_edit" value="Submit" class="btn button-tambahpswt">Submit</button>
      </div>
    </form>
  </div>

  <?php
  if (isset($_POST['submit_edit'])) {
    // menampung inputan dari form
    $nama = $_POST['namaPesawat'];
    $harga = $_POST['hargaPesawat'];
    $deskripsi = $_POST['deskripsiPesawat'];
    $foto = $_POST['foto'];

    // menampung data file yang diupload
    $filename = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    $type1 = explode('.', $filename);
    $type2 = $type1[1];

    $foto_pesawat = 'pesawat' . time() . '.' . $type2;

     // menampung data format file yang diizinkan
    $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG', 'webp');
    move_uploaded_file($tmp_name, './pesawat/' . $foto_pesawat);

    if ($filename != '') {
      if (!in_array($type2, $tipe_diizinkan)) {
        // Jika format file tidak ada di dalam tipe diizinkan
        echo '<script>alert("Format file tidak didukung!");</script>';
      } else {
        unlink('./pesawat/' . $foto);
        move_uploaded_file($tmp_name, './pesawat/' . $foto_pesawat);
        $namagambar = $foto_pesawat;
      }
    } else {
      $namagambar = $foto;
    }

    $update = mysqli_query($koneksi, "UPDATE pesawat SET
                                    id_pesawat= '" . $kategori . "', 
                                    nama_pesawat= '" . $nama . "', 
                                    harga_tiket_pesawat = '" . $harga . "', 
                                    deskripsi_pesawat = '" . $deskripsi . "', 
                                    foto_pesawat= '" . $namagambar . "' 
                                    WHERE id_pesawat= '" . $p->id_pesawat . "'
                                    ");

    if ($update) {
      echo '<script>alert("Produk berhasil diedit!");</script>';
      echo '<script>window.location = "daftar-tiket.php";</script>';
    } else {
      echo '<script>alert("Gagal mengedit produk!")</script>' . mysqli_error($koneksi);
    }
  }
  ?>

  <?php
  require(__DIR__ . '/komponen/footer.php');
  ?>

  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
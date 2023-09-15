<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/1faa5cc1ce.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/0.0.6/iconify-icon.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

    <title>TRAVELIN</title>
  </head>

  <body>
    
     <!-- Navbar -->
    <?php
    require(__DIR__ . '/komponen/navbar.php');
    require("koneksi.php");
    ?>
    <!-- Navbar -->
  
 
            <!-- content -->
            <section id=tambahpesawat>
                <div class="container my-5 d-grid gap-5">
                    <form enctype="multipart/form-data" method="POST" action="" class="row card shadow-sm p-5 g-3">
                        <div class="col-12 text-center">
                            <h2>Tambah Rute</h2>
                        </div>

                        <div class="col-md-5">
                            <label for="inputEmail4" class="form-label">ID Kota<sup style="color: red;">*</sup></label>
                            <input type="text" name="idkota" placeholder="sby-jkt" class="form-control" id="inputEmail4" required>
                        </div>

                        <div class="col-md-5">
                            <label for="inputEmail4" class="form-label">rute<sup style="color: red;">*</sup></label>
                            <input type="text" name="asaltujuan" class="form-control" id="inputEmail4" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" name="submit_rute" value="submit" class="btn button-tambahpswt">Submit</button>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['submit_rute'])) {
                        // menampung inputan dari form
                        $idkota = $_POST['idkota'];
                        $asaltujuan = $_POST['asaltujuan'];

                        $insert = mysqli_query($koneksi, "INSERT INTO rute (idkota, asaltujuan) VALUES ('$idkota','$asaltujuan')");
                    }
                    ?>
                    
                </div>
            </section>

           
                <div class="container my-5 mt-3 d-grid gap-5">
                    <form enctype="multipart/form-data" method="POST" action="" class="row card shadow-sm p-5 g-3">
                        <div class="col-12 text-center">
                            <h2>Tambah Kelas Penerbangan</h2>
                        </div>

                        <div class="col-md-5">
                            <label for="inputEmail4" class="form-label">Nama Kelas<sup style="color: red;">*</sup></label>
                            <input type="text" name="kelas" class="form-control" id="inputEmail4" required>
                        </div>

                        <div class="col-md-5">
                            <label for="inputEmail4" class="form-label">Harga<sup style="color: red;">*</sup></label>
                            <input type="number" name="harga" class="form-control" id="inputEmail4" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" name="submit_kelas" value="submit" class="btn button-tambahpswt">Submit</button>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['submit_kelas'])) {
                        // menampung inputan dari form
                        $kelas = $_POST['kelas'];
                        $harga = $_POST['harga'];

                        $insert = mysqli_query($koneksi, "INSERT INTO kelas (namakelas, harga) VALUES ('$kelas','$harga')");
                    }
                    ?>
                    
                </div>
            <!-- content -->

    <?php
    require(__DIR__ . '/komponen/footer.php');
    ?>

    <script src="script.js"></script>
   
  </body>
</html>

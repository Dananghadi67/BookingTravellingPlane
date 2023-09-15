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
        require('koneksi.php');
        require(__DIR__ . '/komponen/navbar.php');
        ?>

        <!-- content -->
        <section id=tambahpesawat>
            <div class="container my-5 d-grid gap-5">
                <form enctype="multipart/form-data" method="POST" action="upload.php" class="row card shadow-sm p-5 g-3">
                    <div class="col-12 text-center">
                        <h2>Tambah Pesawat</h2>
                    </div>

                    <div class="col-md-5">
                        <label for="inputEmail4" class="form-label">Nama Pesawat <sup style="color: red;">*</sup></label>
                        <input type="text" name="namaPesawat" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-8">
                        <label for="inputAddress2" class="form-label">Foto Pesawat <sup style="color: red;">*</sup></label>
                        <input type="file" name="fotoPesawat" class="form-control" accept="image/*" id="inputAddress2" required>
                    </div>

                    <div class="col-md-5">
                        <label for="inputCity" class="form-label">Asal Pesawat <sup style="color: red;">*</sup></label>
                        <select name="asalPesawat" id="rute" class="form-control">
                            <option disabled selected> Pilih </option>
                            <?php 
                            $query=mysqli_query($koneksi, "SELECT * FROM rute");
                            while ($koneksi = mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?=$koneksi['idkota']?>"><?=$koneksi['asaltujuan']?></option> 
                            <?php
                            }
                            ?>
                        </select>
                    </div>


                    <div class="col-md-5">
                        <label for="inputCity" class="form-label">Harga Tiket Pesawat <sup style="color: red;">*</sup></label>
                        <input type="number" name="hargaPesawat" class="form-control" id="inputCity" required>
                    </div>
                    <div class="col-md-5">
                        <label for="deskripsiPesawat" class="form-label">Deskripsi Pesawat <sup style="color: red;">*</sup></label>
                        <textarea name="deskripsiPesawat" class="form-control" id="deskripsiProduk" rows="10" placeholder="Masukkan deskripsi produk ..."></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="submit_Pesawat" value="submit" class="btn button-tambahpswt">Submit</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- content -->

        <?php
        require(__DIR__ . '/komponen/footer.php');
        ?>

        <!-- Bootstrap CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="script.js"></script>

    </body>
</html>
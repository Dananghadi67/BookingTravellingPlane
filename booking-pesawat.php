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
            <form enctype="multipart/form-data" method="POST" action="data.php" class="row card shadow-sm p-5 g-3">
                <div class="col-12 text-center">
                    <h2>Form Pesan Tiket Pesawat</h2>
                </div>
                <div class="col-md-5">
                    <label for="inputnama" class="form-label">Nama <sup style="color: red;">*</sup></label>
                    <input type="text" name="nama" class="form-control" id="inputnama" required>
                </div>

                <div class="col-md-5">
                    <label for="inputemail" class="form-label">Email<sup style="color: red;">*</sup></label>
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="emailHelp" required />
                </div>

                <div class="col-md-5">
                    <label for="inputnomor" class="form-label">Nomor Telepon <sup style="color: red;">*</sup></label>
                    <input type="text" name="nomor" class="form-control" id="inputnomor" required>
                </div>

                <div class="col-md-5">
                    <label for="deskripsipesawat" class="form-label"> Jenis Kelamin <sup style="color: red;">*</sup></label>
                    <div class="form-check">
                        <input style="display: inline;" value="Laki - Laki" class="form-check-input" type="radio" name="kelamin" id="kelamin1">
                        <label class="form-check-label" for="kelamin1">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input style="display: inline;" value="Perempuan" class="form-check-input" type="radio" name="kelamin" id="kelamin2">
                        <label class="form-check-label" for="kelamin2">
                            Perempuan
                        </label>
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="inputwarga" class="form-label">Kewarganegaraan<sup style="color: red;">*</sup></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="warga" value="WNI" id="warga">
                        <label class="form-check-label" for="warga">
                            WNI
                        </label>
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="inputpesawat" class="form-label">Pilih Pesawat <sup style="color: red;">*</sup></label>
                    <select name="pesawat" id="pesawat" class="form-control">
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM pesawat");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option value="<?= $data['id_pesawat'] ?>"><?= $data['nama_pesawat'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="inputrute" class="form-label">Rute Pesawat <sup style="color: red;">*</sup></label>
                    <select name="asal" id="rute" class="form-control">
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM rute");
                        while ($rute = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?= $rute['idkota'] ?>"><?= $rute['asaltujuan'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="inputkelas" class="form-label">Kelas Penerbangan<sup style="color: red;">*</sup></label>
                    <select name="kelas" id="kelas" class="form-control">
                        <?php
                        $kasta = mysqli_query($koneksi, "SELECT * FROM kelas");
                        while ($kelas = mysqli_fetch_array($kasta)) {
                        ?>
                            <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['namakelas'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="inputkursi" class="form-label">Jumlah Kursi <sup style="color: red;">*</sup></label>
                    <input type="number" name="kursi" class="form-control" id="inputCity" required>
                </div>

                <div class="col-md-5">
                    <label for="inputkeberangkatan" class="form-label">Tanggal Keberangkatan<sup style="color: red;">*</sup></label>
                    <div class="form-group">
                        <div>
                            <input class="form-control item" type="date" id="tanggal" name="tanggal">
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mb-3">
                    <label for="keterangan" class="form-label">Keterangan Tambahan</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="10" placeholder="Masukkan Keterangan Tambahan ..."></textarea>
                </div>

                <div class="col-12">
                    <button type="submit" name="submit_Pesawat" value="submit" class="btn button-tambahpswt">Submit</button>
                </div>
        </div>
        </form>
        </div>
    </section>
    <!-- content -->

    <?php
    require(__DIR__ . '/komponen/footer.php');
    ?>

    <script src="script.js"></script>

</body>

</html>
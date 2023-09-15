<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>


<!DOCTYPE html>
<html>

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

    <title>Edit Tiket</title>
</head>

<body>
  <?php
  require(__DIR__ . '/komponen/navbar.php');
  require("koneksi.php");
  ?>

            <!-- content -->
            <section id=tambahpesawat>
                <div class="container my-5 d-grid gap-5">
                    <form enctype="multipart/form-data" method="POST" action="updatelist.php" class="row card shadow-sm p-5 g-3">
                        <div class="col-12 text-center">
                            <h2>Form Pesan Tiket Pesawat</h2>
                        </div>
                    
                        <?php 
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi, "SELECT * FROM datatiket JOIN kelas ON datatiket.id_kelas=kelas.id_kelas JOIN rute ON datatiket.idkota=rute.idkota JOIN pesawat ON datatiket.id_pesawat=pesawat.id_pesawat WHERE id_tiket=$id");
                        foreach ($data as $item) {
                        ?>
                        
                        <dr>

                        <div class="col-md-5">
                            <label for="inputEmail4" class="form-label">Nama<sup style="color: red;">*</sup></label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $item['nama'] ?>"  required>
                        </div>

                        <div class="col-md-5">
                            <label for="inputEmail4" class="form-label">Email<sup style="color: red;">*</sup></label>
                            <input type="email" name="email" class="form-control" value="<?php echo $item['email'] ?>" aria-describedby="emailHelp"/>
                        </div>

                        <div class="col-md-5">
                            <label for="inputCity" class="form-label">Nomor Telepon <sup style="color: red;">*</sup></label>
                            <input type="text" name="nomor" class="form-control" value="<?php echo $item['nomor'] ?>" id="inputCity" required>
                        </div>

                        <div class="col-md-5">
                            <label for="deskripsiPesawat" class="form-label"> Jenis Kelamin <sup style="color: red;">*</sup></label>
                            <div class="form-check">
                                <input style="display: inline;" value="Laki - Laki" class="form-check-input" type="radio" name="kelamin" id="kelamin1"
                                <?php if ($item['kelamin'] == "Laki - Laki") {
                                     echo "checked";
                                    } ?>>
                                 <label class="form-check-label" for="kondisi1">
                                        Laki - Laki
                                </label>
                            </div>

                            <div class="form-check">
                                <input style="display: inline;" value="Perempuan" class="form-check-input" type="radio" name="kelamin" id="kelamin2"
                                <?php if ($item['kelamin'] == "Perempuan") {
                                echo "checked";
                                } ?>>
                                <label class="form-check-label" for="kondisi2">
                                    Perempuan
                                </label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label for="inputEmail4" class="form-label">Kewarganegaraan<sup style="color: red;">*</sup></label>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="warga" value="WNI"
                                    id="warga"
                                    <?php $isChecked = $item['warga'] == "WNI" ? "checked" : "";
                                    echo $isChecked; ?>>
                                <label class="form-check-label" for="warga">
                                    WNI
                                </label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label for="inputCity" class="form-label">Pilih Pesawat <sup style="color: red;">*</sup></label>
                            <select name="pesawat" id="pesawat" class="form-control">
                                <?php 
                                $sql=mysqli_query($koneksi, "SELECT * FROM pesawat");
                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                <option value="<?php echo $data['id_pesawat']; ?>" <?php $isSelected = $data['id_pesawat'] == $item['id_pesawat'] ? "selected" : "";
                                echo $isSelected; ?>>
                                    <?php echo $data['nama_pesawat'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <label for="inputCity" class="form-label">Rute Pesawat <sup style="color: red;">*</sup></label>
                            <select name="asal" id="asal" class="form-control">
                                <?php 
                                $query=mysqli_query($koneksi, "SELECT * FROM rute");
                                while ($rute = mysqli_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $rute['idkota']; ?>" <?php $isSelected = $rute['idkota'] == $item['idkota'] ? "selected" : "";
                                echo $isSelected; ?>>
                                    <?php echo $rute['asaltujuan'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <label for="inputCity" class="form-label">Kelas Penerbangan<sup style="color: red;">*</sup></label>
                            <select name="kelas" id="kelas" class="form-control">
                            <?php
                                $kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
                                $i = 1;
                                foreach ($kelas as $list) {
                                ?>
                                <option value="<?php echo $list['id_kelas']; ?>" <?php $isSelected = $list['id_kelas'] == $item['id_kelas'] ? "selected" : "";
                                echo $isSelected; ?>>
                                    <?php echo $list['namakelas'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <label for="inputCity" class="form-label">Jumlah Kursi <sup style="color: red;">*</sup></label>
                            <input type="number" name="kursi" class="form-control" value="<?php echo $item['kursi'] ?>" id="inputCity" required>
                        </div>

                        <div class="col-md-5">
                            <label for="inputCity" class="form-label">Tanggal Keberangkatan<sup style="color: red;">*</sup></label>
                            <div class="form-group">
                                <div>
                                    <input class="form-control item" type="date" id="tanggal" name="tanggal" value="<?php echo $item['tanggal'] ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="deskripsiPesawat" class="form-label">Keterangan Tambahan</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="10" placeholder="Masukkan Keterangan Tambahan ..." value="<?php echo $item['deskripsi'] ?>"></textarea>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $item['id_tiket'] ?>">

                        <div class="col-12">
                            <button type="submit" name="submit_edit" value="submit" class="btn button-tambahpswt">Submit</button>
                        </div>
                    </form>
                    <?php  } ?>
                </div>
            </section>
            <!-- content -->


  <!-- END section -->
  <script src="js/theme.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
</body>

</html>
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
    require('koneksi.php');
    ?>
    <!-- Navbar -->

    <!-- Layanan -->
    <section id="daftarpesawat">
        <div class="container mt-5 h-100">
            <div class="row">
            <div class="col-12 mb-3 text-center">
                <h2>Tiket Anda</h2>
            </div>
            <a a href="booking-pesawat.php" class="btn button-tambahpswt mb-4">Tambah</a>

            <!-- ITEM PRODUK -->
            <div class="col-lg-12">
                <div class="row d-flex flex-row justify-content-start">
                    <table class="table table-striped table-hover table-warning text-center">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Kewarganegaraan</th>
                                <th>Pesawat</th>
                                <th>Asal & Tujuan</th>
                                <th>Tanggal</th>
                                <th>Kursi</th>
                                <th>Kelas</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = mysqli_query($koneksi, "SELECT * FROM datatiket JOIN kelas ON datatiket.id_kelas=kelas.id_kelas JOIN rute ON datatiket.idkota=rute.idkota JOIN pesawat ON datatiket.id_pesawat=pesawat.id_pesawat");
                            $i = 1;
                            foreach ($data as $item) {
                            ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $item['nama'] ?></td>
                                    <td><?php echo $item['email'] ?></td>
                                    <td><?php echo $item['warga'] ?></td>
                                    <td><?php echo $item['nama_pesawat'] ?></td>
                                    <td><?php echo $item['asaltujuan'] ?></td>
                                    <td><?php echo $item['tanggal'] ?></td>
                                    <td><?php echo $item['kursi'] ?></td>
                                    <td><?php echo $item['namakelas'] ?></td>
                                    <td><a href="detailpemesanan.php?id=<?php echo $item['id_tiket'] ?>"><span class="badge bg-primary">Detail</span></a></td>
                                    <td><a href="editlist.php?id=<?php echo $item['id_tiket'] ?>"><span class="badge bg-success">Edit</span></a></td>
                                    <td><a href="hapuslist.php?id=<?php echo $item['id_tiket'] ?>"><span class="badge bg-danger">Hapus</span></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        


    
        </div>
    </div>
    </section>
    <!-- Layanan -->

    <?php
    require(__DIR__ . '/komponen/footer.php');
    ?>

    <script src="script.js"></script>

</body>
</html>

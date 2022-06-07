<!DOCTYPE html>
<html lang = "id">
<!--
    Nama  : Muhammad Satria Ramadhani
    NIM   : 2005128
    Kelas : Ilmu Komputer - KOM-4C2
-->

<!-- Web preparation. -->
<head>
    <link rel = "icon" href = "img/logo-circle.png" />
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel = "stylesheet" href = "../assets/style/additional-style.css" />
    <meta charset = "UTF-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
    <title>Tugas Praktikum 03 - Desain dan Pemrograman Web</title>
</head>

<!-- Body. -->
<body>
    <?php include("navbar/admin.html"); ?>

    <section class="d-flex bg-light w-100 my-4 px-5">
        <div class = "card container w-25 p-5 mr-3">
            <div class = "my-4">
                <h3>Ubah Status Toko</h3>
                <span class = "text-center">
                    <button class = "btn btn-secondary fw-bold mt-3 px-3">
                        <span class = "text-white">Status Toko:</span>
                        <span class = "text-status">
                            <?php
                                echo ($setting['status_toko'] == 0) ? "TUTUP" : "BUKA";  
                            ?>
                        </span>
                    </button>
                    <a href = "<?= base_url("/admin/status"); ?>" class = "btn btn-warning mt-3">Ubah</a>
                </span>
            </div>
            <div class = "my-4">
                <h3>Tambah Data Pengunjung</h3>
                <div class = "d-flex justify-content-start">
                    <a href = "<?= base_url('/admin/add') ?>">
                        <button name = "add" class = "btn btn-primary my-3">Data</button>
                    </a>
                </div>
            </div>
        </div>
        <div class = "card bg-light container w-75 p-5">
            <?php include("includes/chart.php"); ?>
        </div>
    </section>


    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src = "../assets/script/additional-script.js"></script>
    <script>
        var vph_today = <?php echo json_encode($hours_per_today); ?>;
        var vph_month = <?php echo json_encode($hours_per_month); ?>;

        numberCount(); visitorPerDay();
        visitorPerHour("vph_today", vph_today); 
        visitorPerHour("vph_month", vph_month);
    </script>
</body>
</html>
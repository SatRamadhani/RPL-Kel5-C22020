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

    <section class = "container my-4">
        <h3 class = "mb-3 fw-bold">STATISTIK HARI INI</h3>
        <div class = "row gap-3 mb-5">
            <div class = "col">
                <div class = "card shadow py-3">
                    <p class = "card-body text-center display-1 fw-bold" data-val = "8">
                        0
                    </p>
                    <p class = "text-center h5">
                        Jumlah Pengunjung Saat Ini
                    </p>
                </div>
            </div>
            <div class = "col">
                <div class = "card shadow py-3">
                    <p class = "card-body text-center display-1 fw-bold" data-val = "32">
                        0
                    </p>
                    <p class = "text-center h5">
                        Kapasitas Maksimum Toko
                    </p>
                </div>
            </div>
            <div class = "col">
                <div class = "card shadow py-3">
                    <p class = "card-body text-center display-1 fw-bold" data-val = "<?= $today_visitor; ?>">
                        0
                    </p>
                    <p class = "text-center h5">
                        Jumlah Pengunjung Hari Ini
                    </p>
                </div>
            </div>
            <div class = "col">
                <div class = "card shadow py-3">
                    <p class = "card-body text-center display-1 fw-bold" data-val = "0">
                        0
                    </p>
                    <p class = "text-center h5">
                        Kasus Overloading
                    </p>
                </div>
            </div>
        </div>

        <h4 class="pb-1 text-center">Jumlah Pengunjung per Jam (<?= date("d/m/Y"); ?>)</h4>
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-auto">
                <canvas id="vph_today" class="container-fluid align-items-center border border-2 text-center mb-5 p-4">
                    TEST GRAPH
                </canvas>
            </div>
        </div>
    </section>

    <section class="container-md" id="histograph">
        <h3 class="mb-3 fw-bold">
            STATISTIK 30 HARI TERAKHIR
        </h3>
        <div class="row">
            <div class="col-md-6 col-auto">
                <h4 class="pb-1">Rerata Pengunjung per Jam</h4>
                <canvas id="vph_month" class="container-fluid align-items-center border border-2 text-center mb-5 p-4 ">
                    TEST GRAPH
                </canvas>
            </div>

            <div class="col-md-6 col-auto">
                <h4 class="pb-1">Rerata Pengunjung per Hari</h4>
                <canvas id="vpd" class="container-fluid align-items-center border border-2 text-center mb-5 p-4 ">
                    TEST GRAPH
                </canvas>
            </div>
        </div>
    </section>

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src = "assets/script/additional-script.js"></script>
    <script>
        var vph_today = <?php echo json_encode($hours_per_today); ?>;
        var vph_month = <?php echo json_encode($hours_per_month); ?>;

        numberCount(); visitorPerDay();
        visitorPerHour("vph_today", vph_today); 
        visitorPerHour("vph_month", vph_month);
    </script>
</body>
</html>
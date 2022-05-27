<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "assets/style/additional-style.css" />
    <title>RPL Kelompok 5 - C2 2020</title>
</head>

<body>

    <?php include("navbar/visitor.html"); ?>

    <section class = "container clearfix mt-5 mb-4">
        <button class = "btn btn-secondary float-end fw-bold px-5">
            <span class = "text-white">Status Toko:</span>
            <span class = "text-status">BUKA</span>
        </button>
    </section>

    <section class = "container my-4">
        <h3 class = "mb-3 fw-bold">STATISTIK HARI INI</h3>
        <div class = "row gap-3">
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
                    <p class = "card-body text-center display-1 fw-bold" data-val = "255">
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
    </section>

    <section class="container-md pt-5" id="histograph">
        <h3 class="mb-3 fw-bold">
            STATISTIK 30 HARI TERAKHIR
        </h3>
        <div class="row">
            <div class="col-md-6 col-auto">
                <h4 class="pb-1">Rerata Pengunjung per Jam</h4>
                <canvas id="vph" class="container-fluid align-items-center border border-2 text-center mb-5 p-4 ">
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
</body>
</html>
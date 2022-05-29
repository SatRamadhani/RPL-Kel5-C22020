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
    <nav class = "navbar bg-primary px-5">
        <div class = "container-fluid mx-5">
            <a class = "navbar-brand" href = "/">
                <img src = "img/logo-circle.png" height = "30"/>
            </a>
            <div>
                <ul class = "navbar-nav me-auto my-1">
                </ul>
                <div class = "d-flex justify-content-center">
                    <a href = "<?= base_url('/admin/auth/logout'); ?>">
                        <button class = "btn btn-warning">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class = "bg-light p-5">
        <div class = "mask d-flex align-items-center h-100 gradient-custom-3">
            <div class = "container h-100">
                <div class = "row d-flex justify-content-center align-items-center h-100">
                    <div class = "d-flex justify-content-center">
                        <a href = "#">
                            <button name = "add" class = "btn btn-primary btn-lg mt-5">Tambah Data</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
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
            <a class = "navbar-brand" href = "index.html">
                <img src = "img/logo-circle.png" height = "30"/>
            </a>
            <div>
                <ul class = "navbar-nav me-auto my-1">
                </ul>
                <div class = "d-flex justify-content-center">
                    <a href = "login.html">
                        <h6 class = "nav-link align-items-center text-white bg">Tentang Kami</h6>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class = "bg-light p-5">
        <div class = "mask d-flex align-items-center h-100 gradient-custom-3">
            <div class = "container h-100">
                <div class = "row d-flex justify-content-center align-items-center h-100">
                    <div class = "col-12 col-md-9 col-lg-7 col-xl-6">
                        <h2 class = "text-center mb-0">Login Administrator</h2>
                        <p class = "lead text-center mb-5">Mohon isi username dan password sesuai akun staf.</p>
                        <form method = "POST" action = "<?= base_url('/admin/auth'); ?>">
                            <!-- Username input. -->
                            <div class = "form-floating mb-3">
                                <input class = "form-control" type = "username" placeholder = "Masukkan username..." data-sb-validations = "required" required />
                                <label for = "username">Username</label>
                                <div class = "invalid-feedback" data-sb-feedback = "username:required">Harap masukkan username.</div>
                                <div class = "invalid-feedback" data-sb-feedback = "username:username">Username tidak valid.</div>
                            </div>
        
                            <!-- Password input. -->
                            <div class = "form-floating mb-2">
                                <input class = "form-control" type = "password" placeholder = "Masukkan password..." data-sb-validations = "required" required />
                                <label for = "password">Password</label>
                                <div class = "invalid-feedback" data-sb-feedback = "password:required">Harap masukkan password.</div>
                                <div class = "invalid-feedback" data-sb-feedback = "password:password">Password tidak valid.</div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-lg mt-5">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src = "assets/script/additional-script.js"></script>
</body>
</html>
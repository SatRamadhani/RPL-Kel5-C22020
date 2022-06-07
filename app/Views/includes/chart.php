<div class = "container my-4">
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
                        <p class = "card-body text-center display-1 fw-bold" data-val = "<?= $setting['kapasitas_toko']; ?>">
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
        </div>
    
        <div class="container-md" id="histograph">
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
        </div>
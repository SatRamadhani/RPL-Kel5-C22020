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

    <?php
        if(session()->get('login'))
        {
            include("navbar/admin.html");
        }
        else
        {
            include("navbar/visitor.html");
        }
    ?>

    <section class = "container clearfix mt-5 mb-4">
        <button class = "btn btn-secondary float-end fw-bold px-5">
            <span class = "text-white">Status Toko:</span>
            <span class = "text-status">
                <?php
                    echo ($setting['status_toko'] == 0) ? "TUTUP" : "BUKA";  
                ?>
            </span>
        </button>
    </section>

    <section id = "chart">
        <?php include("includes/chart.php"); ?>
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
<!-- application/views/health_info.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css');?>">
    <title>Info Kesehatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .health-box {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }

        .health-box h3 {
            color: #333;
        }

        .health-box p {
            color: #666;
        }
    </style>
</head>
<body>

<header>
        <div class="container">
            <h1>Gastrolyfe</h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="<?php echo base_url('dashboard');?>">Beranda</a></li>
                    <li><a href="<?php echo base_url('dashboard/info');?>">Info Sehat</a></li>
                    <li><a href="<?php echo base_url('dashboard/tips');?>">Tips Sehat</a></li>
                    <li><a href="<?php echo base_url('dashboard/menu');?>">Menu Sehat</a></li>
                    <li><a href="<?php echo base_url('dashboard/diag');?>">Diagnosis</a></li>
                    <li><a href="<?php echo base_url('auth');?>">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
            <h2>Info Kesehatan</h2>
            <p>Berita terbaru tentang kesehatan lambung</p>

            <!-- Box 1 -->
            <div class="health-box">
                <h3> tips sistem pencernaan lambung </h3>
                <p>Preview . memperhatikan jam makan, makan makanan alami..</p>
                <a href="#">Baca Selengkapnya</a>
            </div>

            <!-- Box 2 -->
            <div class="health-box">
                <h3> gaya hidup sehat untuk menjaga kesehatan lambung</h3>
                <p>Preview hindari asupan rokok dan alkohol, jangan lupakan olahraga.</p>
                <a href="#">Baca Selengkapnya</a>
            </div>

            <!-- Tambahkan lebih banyak box sesuai dengan jumlah info kesehatan -->

        </div>

    <footer>
            <p>&copy; Made With Love By Us</p>
    </footer>

</body>
</html>


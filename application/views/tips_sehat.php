<!-- application/views/health_tips.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css');?>">
    <title>Tips Kesehatan</title>
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

        .health-tip {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .health-tip img {
            max-width: 45%;
            border-radius: 8px;
            margin-right: 20px;
        }

        .health-tip div {
            max-width: 50%;
        }

        h2 {
            color: #333;
        }

        p {
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
        <h2>Tips Kesehatan</h2>
        <p>Jaga agar lambung anda tetap sehat</p>

        <!-- Tips 1 -->
        <div class="health-tip">
            <img src="path/to/image1.jpg" alt="Gambar Tips 1">
            <div>
                <h3>Judul Tips 1</h3>
                <p>Teks tips kesehatan 1. Deskripsi singkat mengenai tip tersebut.</p>
            </div>
        </div>

        <!-- Tips 2 -->
        <div class="health-tip">
            <div>
                <h3>Judul Tips 2</h3>
                <p>Teks tips kesehatan 2. Deskripsi singkat mengenai tip tersebut.</p>
            </div>
            <img src="path/to/image2.jpg" alt="Gambar Tips 2">
        </div>

        <!-- Tambahkan lebih banyak tips sesuai dengan kebutuhan -->

    </div>

    <footer>
            <p>&copy; Made With Love By Us</p>
    </footer>

</body>
</html>

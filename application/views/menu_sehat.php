<!-- application/views/healthy_menus.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css');?>">
    <title>Menu Sehat</title>
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

        .menu-row {
            display: flex;
            margin-bottom: 20px;
            justify-content: space-between;
        }

        .menu-box {
            width: 48%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-right: 2%;
            box-sizing: border-box;
        }

        .menu-box img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        h2 {
            color: #333;
        }

        h3 {
            color: #666;
        }

        p {
            color: #888;
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
        <h2>Menu Sehat</h2>
        <p>Berbagai menu yang sehat untuk lambung Anda</p>

        <!-- Baris Menu 1 -->
        <div class="menu-row">
            <!-- Menu 1 -->
            <div class="menu-box">
                <img src="<?php echo base_url('assets/img/jus-bayam.jpeg');?>" alt="Gambar Menu 1">
                <h3>Jus Bayam Segar</h3>
                <p>Deskripsi singkat mengenai menu sehat 1. Informasi nutrisi dan bahan-bahan yang digunakan.</p>
            </div>
            
            <!-- Menu 2 -->
            <div class="menu-box">
                <img src="<?php echo base_url('assets/img/Quinoa-Salad.jpeg');?>" alt="Gambar Menu 2">
                <h3>Quinoa Salad</h3>
                <p>Deskripsi singkat mengenai menu sehat 2. Informasi nutrisi dan bahan-bahan yang digunakan.</p>
            </div>
        </div>

        <!-- Baris Menu 2 -->
        <div class="menu-row">
            <!-- Menu 3 -->
            <div class="menu-box">
                <img src="path/to/menu3.jpg" alt="Gambar Menu 3">
                <h3>Judul Menu 3</h3>
                <p>Deskripsi singkat mengenai menu sehat 3. Informasi nutrisi dan bahan-bahan yang digunakan.</p>
            </div>
            
            <!-- Menu 4 -->
            <div class="menu-box">
                <img src="path/to/menu4.jpg" alt="Gambar Menu 4">
                <h3>Judul Menu 4</h3>
                <p>Deskripsi singkat mengenai menu sehat 4. Informasi nutrisi dan bahan-bahan yang digunakan.</p>
            </div>
        </div>

        <!-- Tambahkan lebih banyak baris menu sesuai dengan kebutuhan -->

    </div>

    <footer>
            <p>&copy; Made With Love By Us</p>
    </footer>

</body>
</html>

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
                <p>
Jus bayam dapat bermanfaat bagi individu yang mengalami GERD (Gastroesophageal Reflux Disease). Bayam mengandung antioksidan dan serat, yang dapat membantu meredakan iritasi pada saluran pencernaan. Jus bayam juga bersifat alkalis, dapat menyeimbangkan kadar asam dalam lambung, mengurangi risiko terjadinya refluks asam. Oleh karena itu, jus bayam dapat menjadi pilihan yang baik sebagai minuman yang mendukung kesehatan lambung bagi mereka yang mengalami GERD.</p>
            </div>
            
            <!-- Menu 2 -->
            <div class="menu-box">
                <img src="<?php echo base_url('assets/img/Quinoa-Salad.jpeg');?>" alt="Gambar Menu 2">
                <h3>Quinoa Salad</h3>
                <p>Quinoa kaya serat dan nutrisi, baik untuk kesehatan lambung. Seratnya bantu cegah sembelit, rendah lemak, dan bebas gluten. Antioksidan di dalamnya juga dapat mengurangi peradangan pada sistem pencernaan.</p>
            </div>
        </div>

        <!-- Baris Menu 2 -->
        <div class="menu-row">
            <!-- Menu 3 -->
            <div class="menu-box">
                <img src="path/to/menu3.jpg" alt="Gambar Menu 3">
                <h3>smoothies pisang</h3>
                <p>Smoothies pisang lembut pada lambung dan kaya serat, cocok untuk yang sensitif terhadap makanan. Memberikan energi stabil tanpa meningkatkan asam lambung.</p>
            </div>
            
            <!-- Menu 4 -->
            <div class="menu-box">
                <img src="path/to/menu4.jpg" alt="Gambar Menu 4">
                <h3>Ikan panggang dan kentang</h3>
                <p>Ikan panggang dengan kentang manis adalah pilihan makanan yang sangat baik untuk penderita GERD (Gastroesophageal Reflux Disease) karena menggabungkan bahan-bahan yang ramah terhadap lambung dan dapat membantu mengurangi gejala asam lambung yang tidak nyaman.
</p>
            </div>
        </div>

        <!-- Tambahkan lebih banyak baris menu sesuai dengan kebutuhan -->

    </div>

    <footer>
            <p>&copy; Made With Love By Us</p>
    </footer>

</body>
</html>

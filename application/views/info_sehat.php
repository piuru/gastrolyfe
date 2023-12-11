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
                <h3>Kenali lambung Anda</h3>
                <p>Lambung adalah organ penting dalam sistem pencernaan manusia yang berperan dalam banyak hal. Beberapa fungsi lambung dalam sistem pencernaan antara lain mencerna makanan, menghancurkan bakteri dan virus, serta menghasilkan enzim dan asam lambung yang membantu proses pencernaan. Namun, jika terjadi ketidakseimbangan asam lambung, dapat menimbulkan gejala gangguan pencernaan seperti sakit perut, nyeri pada ulu hati, mual, perut kembung, dan keluhan sejenisnya yang dikenal sebagai maag[2][5]. Beberapa tips untuk menjaga kesehatan lambung antara lain memerhatikan jam makan, makan makanan alami, makan dengan porsi kecil, mengelola stres dengan baik, dan meminum air yang cukup[2][5]. Hindari makanan yang asam dan pedas, alkohol, dan kafein karena dapat memengaruhi fungsi lambung[2][5]. Selain itu, menjaga pola makan dengan tidak ngemil di antara waktu makan dan mengunyah makanan dengan benar juga dapat membantu menjaga keseimbangan asam lambung[3]. Beberapa jenis makanan yang dapat menurunkan asam lambung antara lain sayuran, jahe, pisang, putih telur, dan yoghurt[3][4]. Jika mengalami gejala asam lambung yang sering, sebaiknya segera berkonsultasi dengan dokter untuk mendapatkan penanganan yang tepat[5].</p>
                <a href="#">Baca Selengkapnya</a>
            </div>

            <!-- Box 2 -->
            <div class="health-box">
                <h3>Cara menjaga kesehatan lambung</h3>
                <p>Beberapa tips untuk menjaga kesehatan lambung antara lain adalah memerhatikan jam makan, makan makanan alami, makan dengan porsi kecil, mengelola stres dengan baik, dan meminum air yang cukup[1][2][4]. Hindari makanan yang asam dan pedas, alkohol, dan kafein karena dapat memengaruhi fungsi lambung[1][4]. Selain itu, menjaga pola makan dengan tidak ngemil di antara waktu makan dan mengunyah makanan dengan benar juga dapat membantu menjaga keseimbangan asam lambung[3]. Beberapa jenis makanan yang dapat menurunkan asam lambung antara lain sayuran, jahe, pisang, putih telur, dan yoghurt[5]. Jika mengalami gejala asam lambung yang sering, sebaiknya segera berkonsultasi dengan dokter untuk mendapatkan penanganan yang tepat.</p>
                <a href="#">Baca Selengkapnya</a>
            </div>

            <!-- Tambahkan lebih banyak box sesuai dengan jumlah info kesehatan -->

        </div>

    <footer>
            <p>&copy; Made With Love By Us</p>
    </footer>

</body>
</html>


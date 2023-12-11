<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css');?>">
    <title>Gastrolyfe</title>
</head>
<body>

    <header>
        <div class="container">
        <img src="<?php echo base_url('assets/img/Lambung lucu.jpg');?>" alt="Gastrolyfe Logo">
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

    <section class="hero">
        <div class="container">
            <h2>Selamat datang di Gastrolyfe!</h2>
            <p>Aplikasi ini dirancang dengan tujuan memberikan informasi tentang kesehatan lambung.</p>
        </div>
    </section>

    <!-- Isi konten website Anda akan ditempatkan di sini -->

    <footer>
        <div class="container">
            <p>&copy; Made With Love By Us</p>
        </div>
    </footer>

</body>
</html>

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
            <img src="<?php echo base_url('assets/img/tips sehat.jpg');?>" alt="Gambar Tips 1">
            <div>
                <h3>Tips Sederhana Untuk Membuat Lambung Anda Sehat</h3>
                <p>
Lambung yang sehat berperan penting dalam kesejahteraan kita sehari-hari. Dalam artikel ini, kita akan membahas beberapa tips sederhana yang dapat membantu Anda merawat kesehatan lambung Anda.

1. Pola Makan yang Sehat:

    Makan dengan porsi kecil namun lebih sering, menghindari makan berlebihan.
    Pilih makanan seimbang dengan kandungan serat tinggi, rendah lemak, dan rendah gula.

2. Hindari Makanan Pemicu Asam:

    Kurangi konsumsi makanan pedas, berlemak, dan asam.
    Hindari minuman berkafein dan bersoda, yang dapat merangsang produksi asam lambung.

3. Minum Air Secukupnya:

    Pastikan Anda cukup terhidrasi sepanjang hari.
    Hindari minum terlalu banyak air saat makan agar tidak mengganggu pencernaan.

4. Kelola Stres:

    Temukan cara untuk mengelola stres sehari-hari, seperti meditasi atau olahraga ringan.
    Stres dapat memengaruhi fungsi lambung, sehingga penting untuk menemukan cara yang efektif untuk melepaskannya.

5. Perhatikan Waktu Makan:

    Hindari makan terlalu dekat dengan waktu tidur.
    Berikan waktu cukup bagi tubuh Anda untuk mencerna makanan sebelum beristirahat.

6. Jaga Berat Badan yang Sehat:

    Menjaga berat badan yang sehat dapat membantu mencegah tekanan berlebih pada lambung.
    Berbicara dengan dokter atau ahli gizi untuk panduan yang sesuai.

7. Hindari Merokok:

    Merokok dapat merangsang produksi asam lambung dan meningkatkan risiko tukak lambung.
    Pertimbangkan untuk berhenti merokok untuk mendukung kesehatan lambung.

8. Konsultasikan dengan Dokter:

    Jika Anda mengalami gejala tidak normal seperti mulas atau nyeri perut, segera konsultasikan dengan dokter.
    Dokter dapat memberikan saran dan perawatan yang sesuai dengan kondisi Anda.

Kesimpulan:
Merawat kesehatan lambung tidak selalu memerlukan perubahan besar dalam gaya hidup. Dengan mengadopsi tips sederhana ini, Anda dapat membantu menjaga kesehatan lambung Anda dan meningkatkan kesejahteraan secara keseluruhan. Tetaplah mendengarkan tubuh Anda dan konsultasikan dengan dokter jika perlu. Selamat meraih kesehatan lambung yang optimal!</p>
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

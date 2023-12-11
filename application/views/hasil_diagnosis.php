<!-- application/views/hasil_diagnosis.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosis</title>
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

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Diagnosis</h2>
        <p>Anda didiagnosis menderita: <?= $hasil_diagnosis['penyakit']; ?></p>
        <p>Solusi: <?= $hasil_diagnosis['solusi']; ?></p>
    </div>
</body>
</html>

<!-- application/views/diagnosis.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Diagnosis</title>
</head>
<body>
    <h2>Pilih Gejala yang Anda Alami</h2>
    <form action="<?= base_url('diagnosis/proses_diagnosis'); ?>" method="post">
        <?php foreach ($gejala as $item): ?>
            <label>
                <input type="checkbox" name="gejala[]" value="<?= $item['id_gejala']; ?>">
                <?= $item['nama_gejala']; ?>
            </label><br>
        <?php endforeach; ?>
        <button type="submit">Proses Diagnosis</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tiket Masuk</title>
    <link rel="stylesheet" href="Css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>

<h2>Form Tiket Masuk</h2>

<?php if(isset($_GET['success'])): ?>
    <p style="color: green;">Tiket berhasil dibuat!</p>
<?php endif; ?>

<form action="?action=store-tiket-masuk" method="POST">

    <label>Nomor Polisi</label><br>
    <input type="text" name="nomor_polisi" required><br><br>

    <label>Jenis Kendaraan</label><br>
    <select name="jenis_kendaraan" required>
        <option value="motor">Motor</option>
        <option value="mobil">Mobil</option>
    </select>
    <br><br>

    <label>Tarif</label><br>
    <select name="id_tarif" required>
        <?php foreach($data_tarif as $tarif): ?>
            <option value="<?= $tarif['id_tarif'] ?>">
                <?= ucfirst($tarif['jenis_kendaraan']) ?> - Rp <?= number_format($tarif['harga_flat']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <button type="submit">Simpan Tiket</button>

</form>

</body>
</html>
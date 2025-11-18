<!DOCTYPE html>
<html>
<head>
    <title>Form Tiket Masuk</title>
</head>
<body>

<h2>Form Tiket Masuk</h2>

<?php if(isset($_GET['success'])): ?>
    <p style="color: green;">Tiket berhasil dibuat!</p>
<?php endif; ?>

<form action="?" method="POST">

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
<?php
$success = $_SESSION['success'] ?? null;
$error = $_SESSION['error'] ?? null;
unset($_SESSION['success'], $_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="Css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"/>
</head>
<body class="bg-slate-900 min-h-screen p-6">

<div class="max-w-md mx-auto bg-slate-800 p-8 rounded-xl shadow-lg">
    <h1 class="text-2xl font-bold text-cyan-400 mb-6">Tambah Transaksi</h1>

    <?php if($success): ?>
        <div class="bg-green-700 text-green-100 p-2 rounded mb-4"><?= $success ?></div>
    <?php endif; ?>
    <?php if($error): ?>
        <div class="bg-red-700 text-red-100 p-2 rounded mb-4"><?= $error ?></div>
    <?php endif; ?>

    <form action="?action=store-transaksi" method="POST" class="space-y-4">
        <div>
            <label class="block text-slate-300 mb-1" for="id_tiket">Tiket</label>
            <select name="id_tiket" id="id_tiket" required
                    class="w-full bg-slate-700 text-slate-100 border border-slate-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                <option value="">-- Pilih Tiket --</option>
                <?php foreach($listTiket as $tiket): ?>
                    <option value="<?= $tiket['id_tiket'] ?>">
                        <?= $tiket['nomor_polisi'] ?> (<?= $tiket['jenis_kendaraan'] ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block text-slate-300 mb-1" for="jumlah_bayar">Jumlah Bayar (Rp)</label>
            <input type="number" name="jumlah_bayar" id="jumlah_bayar" required min="0"
                   class="w-full bg-slate-700 text-slate-100 border border-slate-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
        </div>

        <div>
            <label class="block text-slate-300 mb-1" for="metode">Metode Pembayaran</label>
            <select name="metode" id="metode" required
                    class="w-full bg-slate-700 text-slate-100 border border-slate-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                <option value="">-- Pilih Metode --</option>
                <option value="cash">Cash</option>
                <option value="digital">Digital</option>
            </select>
        </div>

        <div class="flex justify-between items-center">
            <a href="?action=dashboard" class="text-cyan-400 hover:underline"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit"
                    class="bg-cyan-500 hover:bg-cyan-600 text-slate-900 px-4 py-2 rounded flex items-center gap-1">
                <i class="fas fa-plus"></i> Tambah Transaksi
            </button>
        </div>
    </form>
</div>

</body>
</html>

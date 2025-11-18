<?php
$current = $_GET['action'] ?? 'index';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Parkir</title>
    <link rel="stylesheet" href="Css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-slate-900 text-white">
    <header><?php require_once __DIR__ . "/../Views/components/header.php"?></header>

    <div class="max-w-7xl mx-auto px-6 py-10">

        <h2 class="text-3xl font-semibold text-cyan-400 mb-6">
            Dashboard Utama
        </h2>

        <!-- CARD MENU -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Kendaraan Masuk -->
            <a href="?action=masuk"
               class="bg-slate-800 border border-slate-700 rounded-2xl p-6 hover:bg-slate-700 transition shadow-md">
                <h3 class="text-xl font-bold text-cyan-400 mb-2">Kendaraan Masuk</h3>
                <p class="text-slate-300 text-sm">Input kendaraan yang baru masuk area parkir.</p>
            </a>

            <!-- Kendaraan Keluar -->
            <a href="?action=keluar"
               class="bg-slate-800 border border-slate-700 rounded-2xl p-6 hover:bg-slate-700 transition shadow-md">
                <h3 class="text-xl font-bold text-cyan-400 mb-2">Kendaraan Keluar</h3>
                <p class="text-slate-300 text-sm">Proses kendaraan keluar dan pembayaran.</p>
            </a>

            <!-- Data Transaksi -->
            <a href="?action=transaksi"
               class="bg-slate-800 border border-slate-700 rounded-2xl p-6 hover:bg-slate-700 transition shadow-md">
                <h3 class="text-xl font-bold text-cyan-400 mb-2">Data Transaksi</h3>
                <p class="text-slate-300 text-sm">Melihat & mengelola data pembayaran parkir.</p>
            </a>

        </div>

        <!-- SECTION INFO -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Total Kendaraan Hari Ini -->
            <div class="bg-slate-800 border border-slate-700 rounded-2xl p-6 shadow-md">
                <h3 class="text-xl font-bold text-cyan-400 mb-2">Statistik Hari Ini</h3>

                <ul class="text-slate-300 mt-3 space-y-2">
                    <li>🚗 Kendaraan Masuk: <b><?= $masukHariIni ?? 0 ?></b></li>
                    <li>🏁 Kendaraan Keluar: <b><?= $keluarHariIni ?? 0 ?></b></li>
                    <li>💰 Total Pendapatan: <b>Rp <?= number_format($pendapatan ?? 0) ?></b></li>
                </ul>
            </div>

            <!-- Info Sistem -->
            <div class="bg-slate-800 border border-slate-700 rounded-2xl p-6 shadow-md">
                <h3 class="text-xl font-bold text-cyan-400 mb-2">Informasi Sistem</h3>

                <p class="text-slate-300 text-sm leading-relaxed">
                    Sistem Parkir ini digunakan untuk mencatat kendaraan masuk, keluar, 
                    dan mengelola transaksi pembayaran parkir.  
                    Dibuat untuk mempermudah petugas dalam operasional harian.
                </p>
            </div>

        </div>

    </div>

</body>
</html>
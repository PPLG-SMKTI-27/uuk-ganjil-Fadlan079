<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Parkir</title>
    <link rel="stylesheet" href="Css/output.css">
</head>
<body class="bg-slate-900 text-white">

<nav class="bg-slate-800 shadow-lg border-b border-slate-700">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- KIRI: Nama Sistem -->
        <h1 class="text-2xl font-bold text-cyan-500">Sistem Parkir</h1>

        <!-- TENGAH: MENU -->
        <ul class="flex items-center gap-6 text-slate-300 font-medium">

            <?php if(isset($_SESSION['user'])): ?>

                <?php if($_SESSION['user']['role'] === 'admin'): ?>

                    <!-- MENU ADMIN -->
                    <li><a href="?action=index" class="hover:text-cyan-400 transition">Home</a></li>
                    <li><a href="?action=manage-user" class="hover:text-cyan-400 transition">Manage User</a></li>
                    <li><a href="?action=manage-tarif" class="hover:text-cyan-400 transition">Manage Tarif</a></li>
                    <li><a href="?action=manage-tiket" class="hover:text-cyan-400 transition">Manage Tiket</a></li>
                    <li><a href="?action=manage-transaksi" class="hover:text-cyan-400 transition">Manage Transaksi</a></li>

                <?php elseif($_SESSION['user']['role'] === 'petugas'): ?>

                    <!-- MENU PETUGAS -->
                    <li><a href="?action=tiket-masuk" class="hover:text-cyan-400 transition">Tiket Masuk</a></li>
                    <li><a href="?action=tiket-keluar" class="hover:text-cyan-400 transition">Tiket Keluar</a></li>
                    <li><a href="?action=transaksi" class="hover:text-cyan-400 transition">Transaksi</a></li>

                <?php endif; ?>

            <?php endif; ?>

        </ul>

        <!-- KANAN: INFO USER & LOGIN/LOGOUT -->
        <div class="flex gap-6 items-center">

            <!-- Jika sudah login -->
            <?php if(isset($_SESSION['user'])): ?>

                <span class="text-slate-300">
                    <?= htmlspecialchars($_SESSION['user']['email']); ?> 
                    <b class="text-cyan-400">(<?= $_SESSION['user']['role']; ?>)</b>
                </span>

                <a href="?action=logout"
                   class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-white transition">
                    Logout
                </a>

            <!-- Jika belum login -->
            <?php else: ?>

                <a href="?action=login"
                   class="px-4 py-2 bg-cyan-500 hover:bg-cyan-600 rounded-lg text-slate-900 font-semibold transition">
                    Login
                </a>

            <?php endif; ?>

        </div>

    </div>
</nav>

    <!-- CONTENT -->
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
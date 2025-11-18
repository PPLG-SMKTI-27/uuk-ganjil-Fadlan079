<?php
// dummy data
$total_user = 12;
$total_masuk = 45;
$total_keluar = 39;
$total_transaksi = 27;

$sessionUser = $_SESSION['user'] ?? null;
$role = $sessionUser['role'] ?? null;
?>

<?php if(!$sessionUser): ?>

    <!-- TAMPILAN JIKA BELUM LOGIN -->
    <div class="text-center py-20">

        <i class="fa-solid fa-lock text-cyan-400 text-7xl mb-6"></i>

        <h2 class="text-3xl font-bold text-cyan-400 mb-4">
            Akses Terbatas
        </h2>

        <p class="text-slate-300 max-w-lg mx-auto mb-6">
            Anda belum login. Silakan login terlebih dahulu untuk mengakses
            dashboard, melihat data tiket masuk, transaksi, dan fitur lainnya.
        </p>

        <a href="?action=login"
           class="px-6 py-3 bg-cyan-500 hover:bg-cyan-600 text-slate-900 font-bold rounded-lg transition">
            <i class="fa-solid fa-right-to-bracket mr-2"></i> Login Sekarang
        </a>

    </div>

<?php else: ?>

    <!-- DASHBOARD CARD JIKA SUDAH LOGIN -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <h2 class="col-span-4 text-3xl font-semibold text-cyan-400 mb-6">
            Dashboard <span class="">Control Panel</span>
        </h2>

        <?php if($role === 'admin'): ?>

            <!-- TOTAL USER -->
            <div class="bg-slate-800 border border-slate-700 p-6 rounded-xl shadow-lg flex items-center gap-4">
                <i class="fa-solid fa-users text-cyan-400 text-4xl"></i>
                <div>
                    <p class="text-slate-400 text-sm">Total User</p>
                    <h3 class="text-2xl font-bold"><?= $total_user ?></h3>
                </div>
            </div>

        <?php endif; ?>

        <!-- TOTAL MASUK -->
        <div class="bg-slate-800 border border-slate-700 p-6 rounded-xl shadow-lg flex items-center gap-4">
            <i class="fa-solid fa-right-to-bracket text-cyan-400 text-4xl"></i>
            <div>
                <p class="text-slate-400 text-sm">Total Masuk</p>
                <h3 class="text-2xl font-bold"><?= $total_masuk ?></h3>
            </div>
        </div>

        <!-- TOTAL KELUAR -->
        <div class="bg-slate-800 border border-slate-700 p-6 rounded-xl shadow-lg flex items-center gap-4">
            <i class="fa-solid fa-right-from-bracket text-cyan-400 text-4xl"></i>
            <div>
                <p class="text-slate-400 text-sm">Total Keluar</p>
                <h3 class="text-2xl font-bold"><?= $total_keluar ?></h3>
            </div>
        </div>

        <!-- TOTAL TRANSAKSI -->
        <div class="bg-slate-800 border border-slate-700 p-6 rounded-xl shadow-lg flex items-center gap-4">
            <i class="fa-solid fa-receipt text-cyan-400 text-4xl"></i>
            <div>
                <p class="text-slate-400 text-sm">Total Transaksi</p>
                <h3 class="text-2xl font-bold"><?= $total_transaksi ?></h3>
            </div>
        </div>

    </div>

<?php endif; ?>
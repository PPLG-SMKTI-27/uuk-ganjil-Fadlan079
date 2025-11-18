<?php
// contoh variabel dummy
$total_user = 12;
$total_masuk = 45;
$total_keluar = 39;
$total_transaksi = 27;

$role = $_SESSION['user']['role'] ?? null;
?>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tiket Keluar</title>

    <link rel="stylesheet" href="Css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
          integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body class="bg-slate-900 text-white">

<div class="max-w-xl mx-auto mt-16 bg-slate-800 border border-slate-700 p-8 rounded-2xl shadow-lg">

    <h2 class="text-3xl font-bold text-cyan-400 mb-6 flex items-center gap-3">
        <i class="fa-solid fa-ticket"></i>
        Tiket Keluar
    </h2>

    <!-- SUCCESS ALERT -->
    <?php if(isset($_GET['success'])): ?>
        <div class="p-4 mb-5 bg-green-600/20 text-green-400 border border-green-600 rounded-lg">
            <i class="fa-solid fa-circle-check mr-2"></i>
            Tiket berhasil diselesaikan!
        </div>
    <?php endif; ?>

    <form action="?action=store-tiket-keluar" method="POST" class="space-y-6">

        <!-- BARCODE -->
        <div>
            <label class="block mb-2 text-slate-300">Scan / Masukkan Barcode</label>
            <input type="text" name="barcode" required autofocus
                   class="w-full px-4 py-2 rounded-lg bg-slate-700 border border-slate-600
                          focus:ring-2 focus:ring-cyan-500 outline-none">
        </div>

        <!-- DATA OTOMATIS (READONLY) -->
        <div>
            <label class="block text-slate-300 mb-1">Nomor Polisi</label>
            <input type="text" name="nomor_polisi" readonly
                   class="w-full px-4 py-2 rounded-lg bg-slate-700 border border-slate-600">
        </div>

        <div>
            <label class="block text-slate-300 mb-1">Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan" readonly
                   class="w-full px-4 py-2 rounded-lg bg-slate-700 border border-slate-600">
        </div>

        <div>
            <label class="block text-slate-300 mb-1">Tarif (Rp)</label>
            <input type="text" name="tarif" readonly
                   class="w-full px-4 py-2 rounded-lg bg-slate-700 border border-slate-600">
        </div>

        <div>
            <label class="block text-slate-300 mb-1">Durasi Parkir</label>
            <input type="text" name="durasi" readonly
                   class="w-full px-4 py-2 rounded-lg bg-slate-700 border border-slate-600">
        </div>

        <div>
            <label class="block text-slate-300 mb-1">Total Harga (Rp)</label>
            <input type="text" name="total_harga" readonly
                   class="w-full px-4 py-2 rounded-lg bg-slate-700 border border-slate-600">
        </div>

        <!-- HIDDEN untuk ke PHP -->
        <input type="hidden" name="id_tarif">
        <input type="hidden" name="tgl_keluar">

        <!-- BUTTON -->
        <button type="submit"
                class="w-full py-3 mt-4 bg-green-500 hover:bg-green-600 text-slate-900 text-lg font-semibold rounded-lg transition">
            <i class="fa-solid fa-door-open mr-2"></i> Selesaikan Tiket
        </button>

        <a href="?action=index"
           class="mt-2 w-full text-center border border-cyan-400
                    text-cyan-400 p-2 rounded-lg hover:bg-cyan-500 hover:text-slate-900
                    flex items-center justify-center gap-2 transition">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Dashboard
        </a>
    </form>
</div>

</body>
</html>
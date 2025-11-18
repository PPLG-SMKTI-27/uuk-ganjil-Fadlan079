<div class="max-w-md mx-auto bg-slate-800 p-6 rounded-xl shadow-lg mt-10">
    <h2 class="text-2xl font-semibold text-cyan-400 mb-4">Tambah Tarif Parkir</h2>
    <form action="?action=insert_tarif" method="POST" class="space-y-4">
        <div>
            <label class="block text-slate-300 mb-1" for="jenis_kendaraan">Jenis Kendaraan</label>
            <select name="jenis_kendaraan" id="jenis_kendaraan" class="w-full p-2 rounded bg-slate-900 text-slate-300">
                <option value="">-- Pilih Jenis Kendaraan --</option>
                <option value="mobil">Mobil</option>
                <option value="motor">Motor</option>
            </select>
        </div>

        <div>
            <label class="block text-slate-300 mb-1" for="harga_flat">Harga Flat</label>
            <input type="number" name="harga_flat" id="harga_flat" class="w-full p-2 rounded bg-slate-900 text-slate-300" placeholder="Masukkan harga flat" required>
        </div>

        <button type="submit" class="w-full py-2 bg-cyan-500 hover:bg-cyan-600 text-slate-900 font-bold rounded-lg transition">
            Simpan Tarif
        </button>
    </form>
</div>
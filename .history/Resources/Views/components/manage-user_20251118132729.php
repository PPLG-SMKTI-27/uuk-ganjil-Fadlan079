<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 min-h-screen p-6">

    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-cyan-400">Manage User</h1>
            <a href="?action=add-user" 
               class="bg-cyan-500 hover:bg-cyan-600 text-slate-900 px-4 py-2 rounded-lg font-semibold transition">
               Tambah User
            </a>
        </div>

        <div class="overflow-x-auto bg-slate-800 rounded-xl shadow-lg">
            <table class="min-w-full divide-y divide-slate-700">
                <thead class="bg-slate-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-slate-300 font-medium uppercase">#</th>
                        <th class="px-6 py-3 text-left text-slate-300 font-medium uppercase">Nama Lengkap</th>
                        <th class="px-6 py-3 text-left text-slate-300 font-medium uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-slate-300 font-medium uppercase">Gender</th>
                        <th class="px-6 py-3 text-left text-slate-300 font-medium uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-slate-800 divide-y divide-slate-700">
                    <?php $no = 1; foreach($users as $user): ?>
                        <tr class="hover:bg-slate-700 transition">
                            <td class="px-6 py-4 text-slate-300"><?= $no++ ?></td>
                            <td class="px-6 py-4 text-slate-300"><?= htmlspecialchars($user['nama_lengkap']) ?></td>
                            <td class="px-6 py-4 text-slate-300"><?= htmlspecialchars($user['email']) ?></td>
                            <td class="px-6 py-4 text-slate-300"><?= htmlspecialchars($user['gender']) ?></td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="?action=edit-user&id=<?= $user['id_user'] ?>" 
                                   class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-slate-900 rounded transition">
                                   Edit
                                </a>
                                <a href="?action=delete-user&id=<?= $user['id_user'] ?>" 
                                   onclick="return confirm('Yakin ingin menghapus user ini?');"
                                   class="px-3 py-1 bg-red-500 hover:bg-red-600 text-slate-900 rounded transition">
                                   Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if(empty($users)): ?>
                        <tr>
                            <td colspan="5" class="text-center text-slate-400 py-4">Belum ada data user.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

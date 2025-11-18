
$success = $_SESSION['success'] ?? null;
$error = $_SESSION['error'] ?? null;
unset($_SESSION['success'], $_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-cyan-600 mb-6">Edit User</h1>

        <?php if($success): ?>
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4"><?= $success ?></div>
        <?php endif; ?>
        <?php if($error): ?>
            <div class="bg-red-100 text-red-800 p-2 rounded mb-4"><?= $error ?></div>
        <?php endif; ?>

        <form action="store-edit-user.php" method="POST" class="space-y-4">
            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">

            <div>
                <label class="block text-gray-700 mb-1" for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= htmlspecialchars($user['nama_lengkap']) ?>" required
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
            </div>

            <div>
                <label class="block text-gray-700 mb-1" for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email']) ?>" required
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
            </div>

            <div>
                <label class="block text-gray-700 mb-1" for="password">Password (Kosongkan jika tidak ingin diubah)</label>
                <input type="password" name="password" id="password"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
            </div>

            <div>
                <label class="block text-gray-700 mb-1" for="gender">Gender</label>
                <select name="gender" id="gender" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                    <option value="L" <?= $user['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="P" <?= $user['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 mb-1" for="role">Role</label>
                <select name="role" id="role" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                    <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="petugas" <?= $user['role'] == 'petugas' ? 'selected' : '' ?>>Petugas</option>
                </select>
            </div>

            <div class="flex justify-between items-center">
                <a href="list_user.php" class="text-cyan-600 hover:underline">Kembali</a>
                <button type="submit"
                        class="bg-cyan-500 text-white px-4 py-2 rounded hover:bg-cyan-600">Update User</button>
            </div>
        </form>
    </div>
</body>
</html>
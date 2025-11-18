<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Parkir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900">

<div class="min-h-screen flex">
    
    <!-- BAGIAN KIRI (Panel / Ilustrasi) -->
    <div class="w-1/2 bg-slate-800 flex flex-col justify-center items-center p-10">
        <h1 class="text-4xl font-bold text-cyan-400 mb-4">
            Sistem Parkir
        </h1>
        <p class="text-slate-300 text-lg text-center">
            Kelola kendaraan masuk dan keluar dengan mudah & akurat.
        </p>
    </div>

    <!-- BAGIAN KANAN (Form Login) -->
    <div class="w-1/2 flex justify-center items-center p-10">
        <form action="?action=store-login" method="post" 
              class="bg-slate-800 p-10 rounded-xl shadow-xl w-full max-w-sm">

            <h2 class="text-3xl font-bold text-cyan-400 mb-6 text-center">Login</h2>

            <label class="text-slate-300 block mb-1">Email</label>
            <input type="text" name="email" placeholder="email anda"
                   class="w-full p-3 mb-4 rounded-lg bg-slate-700 text-white 
                          focus:outline-none focus:ring-2 focus:ring-cyan-500">

            <label class="text-slate-300 block mb-1">Password</label>
            <input type="password" name="password" placeholder="********"
                   class="w-full p-3 mb-4 rounded-lg bg-slate-700 text-white 
                          focus:outline-none focus:ring-2 focus:ring-cyan-500">

            <input type="submit" value="Login"
                   class="w-full bg-cyan-500 hover:bg-cyan-600 text-slate-900 
                          font-semibold p-3 rounded-lg cursor-pointer transition">

            <p class="text-slate-400 text-sm mt-4 text-center">
                Belum punya akun?
                <a href="?action=register" class="text-cyan-400 hover:underline">
                    Register
                </a>
            </p>
        </form>
    </div>

</div>

</body>
</html>

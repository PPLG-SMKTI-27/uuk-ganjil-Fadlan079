<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Parkir</title>
    <link rel="stylesheet" href="Css/output.css">
</head>
<body class="font-sans">
    <form action="?action=store-register" method="post"
        class="p-5 rounded-xl shadow-lg max-w-xl m-auto grid grid-cols-2 gap-3 justify-center bg-blue-500">

        <h1 class="col-span-2 font-semibold text-2xl text-center">Register - Sistem Parkir</h1>

        <div class="col-span-2 flex flex-col">
            <label for="">Nama Depan</label>
            <input type="text" name="nama_depan" placeholder="isi dengan nama depan" class="bg-blue-100 p-2 rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-neutral-900 transition-all duration-300">
        </div>

        <div class="col-span-2 flex flex-col">
            <label for="">Nama Belakang</label>
            <input type="text" name="nama_belakang" placeholder="isi dengan  nama belakang" class="bg-blue-100 p-2 rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-neutral-900 transition-all duration-300">
        </div>

        <div class="col-span-2 flex flex-col">
            <label for="">Email</label>
            <input type="text" name="email" id="" placeholder="isi dengan email" class="bg-blue-100 p-2 rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-neutral-900 transition-all duration-300">
        </div>

        <div class="col-span-2 flex flex-col">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="********" class="bg-blue-100 p-2 rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-neutral-900 transition-all duration-300">
        </div>



        <hr class="border-2 rounded-xl border-">
        <hr class="border-2 rounded-xl border-[var(--accent)]">

                <input type="submit" value="kirim"
        class="col-span-2 p-2 rounded-xl shadow-lg bg-[var(--accent)] text-[var(--textmain)] font-semibold tracking-wide hover:bg-[var(--primary)] hover:text[var(--accent)] transition-all duration-300">
    </form>
</body>
</html>
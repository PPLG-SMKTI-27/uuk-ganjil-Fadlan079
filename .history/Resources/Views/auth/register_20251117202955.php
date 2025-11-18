<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Parkir</title>
    <link rel="stylesheet" href="Css/output.css">
    <style>
        :root {
        --primary: #A8B4BB;
        --accent: #5C8FAE;
        --textmain: #2A2E32;
        --bgsoft: #E7ECEF;
        --divider: #CBD3D6;
        --textsoft: #6C7379;
        }
    </style>
</head>
<body class="font-sans">
    <form action="?action=store-register" method="post"
        class="p-5 rounded-xl shadow-lg max-w-xl m-auto grid grid-cols-2 gap-3 justify-center bg-[var(--primary)] text-[var(--textmain)]">

        <h1 class="col-span-2 font-semibold text-2xl text-center">Register - Sistem Parkir</h1>

        <div class="col-span-2 flex flex-col">
            <label for="">Nama Depan</label>
            <input type="text" name="nama_depan" placeholder="isi dengan nama depan" class="bg-[var(--accent)] p-2 rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-neutral-900 transition-all duration-300">
        </div>

        <div class="col-span-2 flex flex-col">
            <label for="">Nama Belakang</label>
            <input type="text" name="nama_belakang" placeholder="isi dengan  nama belakang" class="bg-[var(--accent)] p-2 rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-neutral-900 transition-all duration-300">
        </div>

        <div class="col-span-2 flex flex-col">
            <label for="">Email</label>
            <input type="text" name="email" id="" placeholder="isi dengan email" class="bg-[var(--accent)] p-2 rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-neutral-900 transition-all duration-300">
        </div>

        <div class="col-span-2 flex flex-col">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="********" class="bg-[var(--accent)] p-2 rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-neutral-900 transition-all duration-300">
        </div>



        <hr class="border-2 rounded-xl border-[var(--accent)]">
        <hr class="border-2 rounded-xl border-[var(--accent)]">

                <input type="submit" value="kirim"
        class="col-span-2 p-2 rounded-xl shadow-lg bg-[var(--accent)] text-[var(--textmain)] font-semibold tracking-wide hover:bg-[var(--primary">
    </form>
</body>
</html>
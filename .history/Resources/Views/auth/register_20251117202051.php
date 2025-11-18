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
        class="p-3  rounded-xl shadow-lg max-w-2xl m-auto flex flex-col gap-3 justify-center bg-[var(--primary)] text-[var(--textmain)]">

        <h1 class="font-semibold text-2xl text-center">Register - Sistem Parkir</h1>

        <label for="">Nama Depan</label>
        <input type="text" name="nama_depan">

        <label for="">Nama Belakang</label>
        <input type="text" name="nama_belakang">

        <label for="">Email</label>
        <input type="text" name="email" id="">

        <label for="">Password</label>
        <input type="password" name="password">

        <input type="submit" value="kirim"
        class="p-2 rounded-xl shadow-lg bg-[var(--accent)] text-[var(--textmain)]">
    </form>
</body>
</html>
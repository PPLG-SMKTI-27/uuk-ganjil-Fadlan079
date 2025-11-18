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
<body>
    <form action="?action=store-register" method="post"
        class="p-3 m-3 rounded-xl shadow-lg flex flex-col gap-3 justify-center">

        <label for="">Nama Depan</label>
        <input type="text" name="nama_depan">

        <label for="">Nama Belakang</label>
        <input type="text" name="nama_belakang">

        <label for="">Email</label>
        <input type="text" name="email" id="">

        <label for="">Password</label>
        <input type="password" name="password">

        <input type="submit" value="kirim"
        class="p-2 rounded-xl shadow-lg bg-[var(--primary)] text-[var(--">
    </form>
</body>
</html>
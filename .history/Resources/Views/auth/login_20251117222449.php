<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Parkir</title>
</head>
<body>
    <form action="?action=store-login" method="post">
        <h1>Login - Sistem Parkir</h1>

        <label for="">Email</label>
        <input type="text" name="email" placeholder="email anda">

        <label for="">Password</label>
        <input type="password" name="password" placeholder="********">

        <input type="submit" value="Login">

        <span>Belum Punya Akun?<a href="?action=register">Reg</a></span>
    </form>
</body>
</html>
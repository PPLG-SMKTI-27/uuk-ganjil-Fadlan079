<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Parkir</title>
    <link rel="stylesheet" href="/Css/output.css">
</head>
<body>
    <header></header>
    <main>
        <?php if(isset($_SESSION['user'])):?>
            <a href="?action=logout">Logout</a>
        <?php else:?>
            <a href="?action=login">Login</a>
        <?php endif?>
    </main>
    <footer></footer>
</body>
</html>
<?php require_once __DIR__ . "/../Views/components/logout-modal.php" ?>
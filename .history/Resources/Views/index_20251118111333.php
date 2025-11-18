<?php
$current = $_GET['action'] ?? 'index';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Parkir</title>
    <link rel="stylesheet" href="Css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="bg-slate-900 text-white">
    <header><?php include __DIR__ . "/../Views/components/header.php"?></header>

    <div class="max-w-7xl mx-auto px-6 py-10">

        <h2 class="text-3xl font-semibold text-cyan-400 mb-6">
            Dashboard Utama
        </h2>
    <main><?php include __DIR__ . "/../Views/components/home.php"?></main>    
</body>
</html>
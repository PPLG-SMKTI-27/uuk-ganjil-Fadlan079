<?php
require __DIR__ . '/../vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

if(!isset($_FILES['gambar'])) {
    http_response_code(400);
    echo "";
    exit;
}

// simpan sementara
$path = __DIR__ . "/../uploads/" . uniqid() . ".jpg";
move_uploaded_file($_FILES['gambar']['tmp_name'], $path);

// proses OCR
$ocr = new TesseractOCR($path);
$hasil = $ocr->lang('eng')->run();

// bersihkan hasil: hanya huruf & angka
$plat = preg_replace("/[^A-Z0-9]/", "", strtoupper($hasil));

echo $plat;

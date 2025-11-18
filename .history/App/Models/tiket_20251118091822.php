<?php
require_once __DIR__ . "/../../Config/database.php";

class Tiket{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function InsertTiket(){
        $barcode         = $_POST['barcode'];
$nomor_polisi    = $_POST['nomor_polisi'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$id_tarif        = $_POST['id_tarif'];
$id_petugas_masuk = $_SESSION['user']['id_user']; // petugas login
$tgl_masuk       = date('Y-m-d H:i:s');
$status          = 'masuk';
    }
}
?>
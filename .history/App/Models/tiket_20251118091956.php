<?php
require_once __DIR__ . "/../../Config/database.php";

class Tiket{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function InsertTiketMasuk(){
        $sql = "INSERT INTO tiket(barcode,nomor_polisi,jenis_kendaraan,id_tarif,tgl_masuk,total_harga";
    }
}
?>
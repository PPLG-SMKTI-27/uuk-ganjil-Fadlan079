<?php
require_once __DIR__ . "/../../Config/database.php";

class Tiket{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function InsertTiketMasuk($barcode,$nomor_polisi,$jenis_kendaraan,$id_tarif,$tgl_masuk,$id_petugas_masuk,$status){
        try{
            
        }
    }
}
?>
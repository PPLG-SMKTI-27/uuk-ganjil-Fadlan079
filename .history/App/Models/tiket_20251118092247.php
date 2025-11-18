<?php
require_once __DIR__ . "/../../Config/database.php";

class Tiket{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function InsertTiketMasuk($barcode,$nomor_polisi,$jenis_kendaraan,$id_tarif,$tgl_masuk,$total_harga,$id_petugas_masuk,$status){
        $sql = "INSERT INTO tiket(barcode,nomor_polisi,jenis_kendaraan,id_tarif,tgl_masuk,total_harga,id_petugas_masuk,status)
        VALUES(:barcode,:nomor_polisi,:jenis_kendaraan,:id_tarif,:tgl_masuk,:total_harga,:id_petugas_masuk,:status)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":barcode",$barcode);
        $stmt->bindParam(":nomor_polisi",$nomor_polisi);
        $stmt->bindParam(":jenis_kendaraan",$jenis_kendaraan);
        $stmt->bindParam(":id_tarif",$id_tarif);
        $stmt->bindParam(":tgl_masuk",$tgl_masuk);
        $stmt->bindParam(":barcode",$barcode);
    }
}
?>
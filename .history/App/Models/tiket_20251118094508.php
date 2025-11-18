<?php
require_once __DIR__ . "/../../Config/database.php";

class Tiket{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function generateBarcode() {
        do {
            $barcode = str_pad(rand(0, 9999999999999), 13, '0', STR_PAD_LEFT);
            $check = $this->pdo->prepare("SELECT COUNT(*) FROM tiket WHERE barcode = ?");
            $check->execute([$barcode]);
            $exists = $check->fetchColumn() > 0;
        } while ($exists);

        return $barcode;
    }

    public function InsertTiketMasuk($nomor_polisi,$jenis_kendaraan,$id_tarif,$tgl_masuk,$id_petugas_masuk,$status){
        try{
            $barcode = $this->generateBarcode();
            $sql = "INSERT INTO tiket(barcode,nomor_polisi,jenis_kendaraan,id_tarif,tgl_masuk,id_petugas_masuk,status)
            VALUES(:barcode,:nomor_polisi,:jenis_kendaraan,:id_tarif,:tgl_masuk,:id_petugas_masuk,:status)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":barcode",$barcode);
            $stmt->bindParam(":nomor_polisi",$nomor_polisi);
            $stmt->bindParam(":jenis_kendaraan",$jenis_kendaraan);
            $stmt->bindParam(":id_tarif",$id_tarif);
            $stmt->bindParam(":tgl_masuk",$tgl_masuk);
            $stmt->bindParam(":id_petugas_masuk",$id_petugas_masuk);
            $stmt->bindParam(":status",$status);
            return $stmt->execute();
        }catch(PDOException $e){
            die("Query gagal :" . $e->getMessage());
        }
    }

    public function SelectTiket(){
        try{
            $sql = "SELECT * FROM tiket";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            die("Query gagal :" . $e->getMessage());
        }
    }

    public function UpdateTiketKeluar($id_tiket,$tgl_keluar,$id_petugas_keluar,$total_harga,$status){
        try{
            $sql = "UPDATE tiket SET(tgl_keluar,id_petugas_keluar,total_harga,status)
            WHERE id_tiket = :id_tiket";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id_tiket",$id_tiket);
            $stmt->bindParam(":tgl_keluar",$tgl_keluar);
            $stmt->bindParam(":id_petugas_keluar",$id_petugas_keluar);
            $stmt->bindParam(":total_harga",$total_harga);
            return $stmt->execute();
        }catch(PDOException $e){
            die("Query gagal :" . $e->getMessage());
        }
    }
}

$tiket = new Tiket();
// $tiket->InsertTiketMasuk("KT 1824 BS","mobil",2,"2025-11-18 09:37:00",1,"masuk");
$tiket->UpdateTiketKeluar(2,"2025-11-18 10:37:00",);
// $data = $tiket->SelectTiket();
// var_dump($data);
?>
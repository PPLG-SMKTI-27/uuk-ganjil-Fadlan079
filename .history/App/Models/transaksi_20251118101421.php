<?php
class Transaksi {
    private $pdo;

    public function __construct() {
        $this->pdo = Database:();
    }

    public function InsertTransaksi($id_tiket, $jumlah_bayar, $metode) {
        try {
            $sql = "INSERT INTO transaksi (id_tiket, jumlah_bayar, metode, tgl_bayar)
                    VALUES (:id_tiket, :jumlah_bayar, :metode, NOW())";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(":id_tiket", $id_tiket);
            $stmt->bindParam(":jumlah_bayar", $jumlah_bayar);
            $stmt->bindParam(":metode", $metode);

            return $stmt->execute();

        } catch (PDOException $e) {
            die("Gagal menambah transaksi: " . $e->getMessage());
        }
    }
}
?>
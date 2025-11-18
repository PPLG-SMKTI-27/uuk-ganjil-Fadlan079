<?php
require_once __DIR__ . "/../../Config/database.php";
class Transaksi {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function InsertTransaksi($id_tiket, $jumlah_bayar, $metode) {
        try {
            $sql = "INSERT INTO transaksi (id_tiket, jumlah_bayar, metode)
                    VALUES (:id_tiket, :jumlah_bayar, :metode)";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(":id_tiket", $id_tiket);
            $stmt->bindParam(":jumlah_bayar", $jumlah_bayar);
            $stmt->bindParam(":metode", $metode);

            return $stmt->execute();

        } catch (PDOException $e) {
            die("Gagal menambah transaksi: " . $e->getMessage());
        }
    }

    public function GetAllTransaksi(){
        try{
            $sql = "SELECT t.*, tk.barcode, tk.nomor_polisi
                    FROM transaksi t
                    JOIN tiket tk ON t.id_tiket = tk.id_tiket
                    ORDER BY t.tgl_bayar DESC";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            die("Query gagal: " . $e->getMessage());
        }
    }
}

$transaksi = new Transaksi();
// $transaksi->InsertTransaksi(2,10000,"cash");
$data = $transaksi->GetAllTransaksi();
var_dump($data);
?>
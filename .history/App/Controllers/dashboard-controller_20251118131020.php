<?php 
require_once __DIR__ . "/../Models/user.php";
require_once __DIR__ . "/../Models/tiket.php";
require_once __DIR__ . "/../Models/transaksi.php";
require_once __DIR__ . "/../Models/tarif-parkir.php";

class DASHBOARDController{
    private $modelUser;
    private $modelTiket;
    private $modelTransaksi;
    private $modelTarif;

    public function __construct(){
        $this->modelUser = new User();
        $this->modelTiket = new Tiket();
        $this->modelTransaksi = new Transaksi();
        $this->modelTarif = new TarifParkir();
    }

    public function index(){
        $listTiket = $this->modelTiket->SelectTiket();
        $listTransaksi = $this->modelTransaksi->GetAllTransaksi();
        $listUser = $this->modelUser->Select();
        $TotalUser = $this->modelUser->countuser();
        $Totalmasuk = $this->modelTiket->countTiketMasuk();
        $Totalkeluar = $this->modelTiket->countTiketKeluar();
        $Totaltransaksi = $this->modelTransaksi->countTransaksi();
        include __DIR__ . "/../../Resources/Views/index.php";
    }

    public function ShowTiketMasuk(){
        $data_tarif = $this->modelTarif->SelectTarif();
        include __DIR__ . "/../../Resources/Views/components/tiket-masuk.php";
    }

    public function StoreTiketMasuk() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nomor_polisi       = $_POST['nomor_polisi'];
            $jenis_kendaraan    = $_POST['jenis_kendaraan'];
            $id_tarif           = $_POST['id_tarif'];
            $tgl_masuk          = date("Y-m-d H:i:s");
            $id_petugas_masuk   = $_SESSION['user']['id_user'];
            $status             = "masuk";

            $insert = $this->modelTiket->InsertTiketMasuk(
                $nomor_polisi,
                $jenis_kendaraan,
                $id_tarif,
                $tgl_masuk,
                $id_petugas_masuk,
                $status
            );

            if ($insert) {
                header("Location: ?action=tiket-masuk&success=1");
                exit;
            } else {
                echo "Gagal memasukkan tiket!";
            }
        }
    }

    public function GetTiketByBarcode() {
        header("Content-Type: application/json");

        if (!isset($_GET['barcode'])) {
            echo json_encode(['status' => 'error', 'message' => 'Barcode tidak dikirim']);
            return;
        }

        $barcode = $_GET['barcode'];

        // Panggil model
        $data = $this->modelTiket->GetTiketByBarcode($barcode);

        if ($data) {
            echo json_encode(['status' => 'success', 'data' => $data]);
        } else {
            echo json_encode(['status' => 'not_found']);
        }
    }

    public function ShowTiketKeluar(){
        include __DIR__ . "/../../Resources/Views/components/tiket-keluar.php";
    }

    public function UpdateTiketKeluar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $barcode = $_POST['barcode'];
            $tgl_keluar = date("Y-m-d H:i:s");
            $id_petugas_keluar = $_SESSION['user']['id_user'];
            $total_harga = $_POST['total_harga'];

            $update = $this->modelTiket->UpdateTiketKeluar(
                $barcode,
                $tgl_keluar,
                $id_petugas_keluar,
                $total_harga
            );

            if ($update) {
                header("Location: ?action=tiket-keluar&success=1");
                exit;
            } else {
                echo "Gagal update tiket!";
            }
        }
    }

    public function ShowInsertTarif()
}
?>
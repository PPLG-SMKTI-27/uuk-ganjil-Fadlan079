<?php 
require_once __DIR__ . "/../Models/user.php";
require_once __DIR__ . "/../Models/tiket.php";
require_once __DIR__ . "/../Models/transaksi.php";

class DASHBOARDController{
    private $modelUser;
    private $modelTiket;
    private $modelTransaksi;

    public function __construct(){
        $this->modelUser = new User();
        $this->modelTiket = new Tiket();
        $this->modelTransaksi = new Transaksi();
    }

    public function index(){
        $TotalUser = $this->modelUser->countuser();
        $Totalmasuk = $this->modelTiket->countTiketMasuk();
        $Totalkeluar = $this->modelTiket->countTiketKeluar();
        $Totaltransaksi = $this->model->countTiketKeluar();
        include __DIR__ . "/../../Resources/Views/index.php";
    }
}
?>
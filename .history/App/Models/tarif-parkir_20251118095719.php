<?php
require_once __DIR__ . "/../../Config/database.php";

class TarifParkir{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }
}
?>
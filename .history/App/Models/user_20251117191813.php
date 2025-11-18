<?php 
require_once __DIR__ . "/../../Config/database.php";

class User{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function Select(){
        try{}
    }
}
?>
<?php 
require_once __DIR__ . "/../../Config/database.php";

class User{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function Insert(){
        try{
            $sql = "INSERT INTO user(nama_depan,namaP";
        }catch(PDOException $e){
            die("Query gagal :" . $e->getMessage());
        }
    }

    public function Select(){
        try{
            $sql = "SELECT * FROM user";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            die("Query gagal :" . $e->getMessage());
        }
    }
}

// $user = new User();
// $data = $user->Select();
// var_dump($data);
?>
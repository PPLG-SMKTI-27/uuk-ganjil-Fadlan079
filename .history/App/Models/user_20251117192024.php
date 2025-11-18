<?php 
require_once __DIR__ . "/../../Config/database.php";

class User{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function Select(){
        try{
            $sql = "SELECT * FROM user";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(FETCH_ASSOC);
        }catch(PDOException $e){
            die("Query gagal :" . $e->getMessage());
        }
    }
}
?>
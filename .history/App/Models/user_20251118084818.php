<?php 
require_once __DIR__ . "/../../Config/database.php";

class User{
    private $pdo;

    public function __construct(){
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function Insert($nama_lengkap,$email,$password,$gender){
        try{
            $sql = "INSERT INTO user(nama_depan,nama_belakang,email,password,gender)
            VALUES(:nama_depan,:nama_belakang,:email,:password,:gender)";
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":nama_depan",$nama_lengkap);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":password",$hash);
            $stmt->bindParam(":gender",$gender);
            return $stmt->execute();
        }catch(PDOException $e){
            die("Query gagal :" . $e->getMessage());
        }
    }

    public function checkEmail($email){
        try{
            $sql = "SELECT COUNT(*) FROM user WHERE email = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":email",$email);
            $stmt->execute();
            return $stmt->fetchColumn() > 0;
        }catch(PDOException $e){
            die("Query gagal :" . $e->getMessage());
        }
    }

    public function getByEmail($email){
        try{
            $sql = "SELECT * FROM user WHERE email = :email LIMIT 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":email",$email);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
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
$user = new User();
// $user->Insert("Fadlan","Firdaus","fadlanfirdaus220@gmail.com","fadlan123","L");
// $data = $user->Select();
// $data = $user->getByEmail('fadlanfirdaus220@gmail.com');
// var_dump($data);
?>
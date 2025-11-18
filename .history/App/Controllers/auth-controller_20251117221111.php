<?php
require_once __DIR__ . "/../Models/user.php";

class AUTHController{
    private $model;

    public function __construct(){
        $this->model = new User();
    }

    public function ShowLogin(){
        include __DIR__ . "/../../Resources/Views/auth/login.php";
    }

    public function StoreLogin(){

    }

    public function ShowRegister(){
        include __DIR__ . "/../../Resources/Views/auth/register.php";
    }

    public function StoreRegister(){
        if($_SERVER['REQUEST_METHOF'] === 'POST'){
            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];  
            if($this->model->checkEmail($email)){
                echo "EMAIL SUDAH TERDAFTAR";
                return;
            }

            
        }
    }

    public function Logout(){
        session_unset();
        session_destroy();
        header("Location:?action=index");
        exit;
    }
}
?>
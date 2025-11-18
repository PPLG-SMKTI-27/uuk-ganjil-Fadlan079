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

    }

    public function Logout(){
        session_unset();
        session_destroy();
        header()
    }
}
?>
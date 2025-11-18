<?php 
require_once __DIR__ . "/../";
require_once __DIR__ . "/../Models/user.php";

class DASHBOARDController{
    private $model;

    // public function __construct(){
    //     $this->model = new ();
    // }

    public function index(){
        Middleware::requirelogin();
        include __DIR__ . "/../../Resources/Views/index.php";
    }
}
?>
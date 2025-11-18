<?php 
require_once __DIR__ . "/../Models/user.php";

class DASHBOARDController{
    private $model;

    // public function __construct(){
    //     $this->model = new ();
    // }

    public function index(){
        session
        include __DIR__ . "/../../Resources/Views/index.php";
    }
}
?>
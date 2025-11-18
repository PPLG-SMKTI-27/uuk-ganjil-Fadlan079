<?php 
require_once __DIR__ . "/../Models/";

class DASHBOARDController{
    private $model;

    // public function __construct(){
    //     $this->model = new ();
    // }

    public function index(){
        include __DIR__ . "/../../Resources/Views/index.php";
    }
}
?>
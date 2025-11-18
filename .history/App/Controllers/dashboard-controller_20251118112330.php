<?php 
require_once __DIR__ . "/../middleware/middleware.php";
require_once __DIR__ . "/../Models/user.php";

class DASHBOARDController{
    private $modelUser;

    public function __construct(){
        $this->modelUser = new User();
    }

    public function index(){
        include __DIR__ . "/../../Resources/Views/index.php";
    }
}
?>
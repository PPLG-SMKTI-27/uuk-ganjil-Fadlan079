<?php 
require_once __DIR__ . "/../Models/user.php";
require_once __DIR__ . "/../Models/tiket.php";

class DASHBOARDController{
    private $modelUser;
    private $modelTiker;

    public function __construct(){
        $this->modelUser = new User();
    }

    public function index(){
        $TotalUser = $this->modelUser->countuser();
        include __DIR__ . "/../../Resources/Views/index.php";
    }
}
?>
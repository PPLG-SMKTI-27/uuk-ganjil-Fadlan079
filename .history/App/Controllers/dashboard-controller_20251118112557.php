<?php 
require_once __DIR__ . "/../Models/user.php";
require_once __DIR__ . "/../Models/.php";

class DASHBOARDController{
    private $modelUser;

    public function __construct(){
        $this->modelUser = new User();
    }

    public function index(){
        $TotalUser = $this->modelUser->countuser();
        include __DIR__ . "/../../Resources/Views/index.php";
    }
}
?>
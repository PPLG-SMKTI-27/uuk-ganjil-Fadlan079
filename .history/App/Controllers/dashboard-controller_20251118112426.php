<?php 
require_once __DIR__ . "/../Models/user.php";

class DASHBOARDController{
    private $modelUser;

    public function __construct(){
        $this-> = modelUsernew User();
    }

    public function index(){
        $TotalUser = $modelUser->countuser();
        include __DIR__ . "/../../Resources/Views/index.php";
    }
}
?>
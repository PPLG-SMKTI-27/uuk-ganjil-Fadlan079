<?php
require_once __DIR__ . "/../App/Controllers/auth-controller.php";

$auth = new AUTHController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? Null;

switch($action){
    // Auth
    case 'login';
        $auth->ShowLogin();
        break;
    case 'store-login';
        $auth->StoreLogin();
        break;    
    case 'register';
        $auth->ShowRegister();
        break;
    case 'store-register';
        $auth->StoreRegister();
        break;
    //    
    case 'index':
        $
        break;

    // 404 Not Found    
    default:
        http_response_code(404);
        include __DIR__ . "/../Resources/Views/errors/404.php";
        break;    
}
?>
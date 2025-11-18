<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/../App/Controllers/auth-controller.php";
require_once __DIR__ . "/../App/Controllers/dashboard-controller.php";

$auth = new AUTHController();
$dashboard = new DASHBOARDController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? Null;

switch($action){
    // Authentication
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
    case 'logout':
        $auth->Logout();
        break;    

    // Dashboard   
    case 'index':
        $dashboard->index();
        break;
    case 'tiket-masuk':
        break;   
         

    // 404 Not Found    
    default:
        http_response_code(404);
        include __DIR__ . "/../Resources/Views/errors/404.php";
        break;    
}
?>
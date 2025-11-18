<?php
require_once __DIR__ . "/../";
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? Null;

switch($action){
    case 'index':
        break;

    // 404 Not Found    
    default:
        http_response_code(404);
        include __DIR__ . "/../Resources/Views/errors/404.php";
        break;    
}
?>
<?php
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? Null;

switch($action){
    case 'index':
        break;
    default:
        http_response_code(404);
        include __DIR__ . "/../Resources/Views/errors/404.php";
        break;    
}
?>
<?php
require_once 'config/db.php';

session_start();

if(empty($_SESSION['username'])&&empty($_SESSION['password'])){
    header('Location: sign_in.php');
}

if (isset($_GET['controller'],$_GET['action'])) {
    $controller=$_GET['controller'];
    $action=$_GET['action'];
} else {
    $controller='home';
    $action='index';
}

require_once 'views/layout.php';

?>

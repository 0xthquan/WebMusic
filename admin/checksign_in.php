<?php
require_once 'config/db.php';
require_once 'controllers/admin.php';
require_once 'models/master.php';
require_once 'models/admin.php';


if (!empty($_POST['username'])&&!empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $controller = new Admin();
    $result = $controller->check($username,$password);

    if(!$result){
    header('Location: sign_in.php?result=false');
    }
}
else{
	header('Location: sign_in.php');
}



?>

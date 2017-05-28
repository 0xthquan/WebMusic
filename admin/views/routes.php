<?php
require_once 'controllers/'.$controller.'.php';
require_once 'models/master.php';

switch($controller){
    case 'home':
        $controller = new Home();
        require_once 'models/tinhot.php';
        break;

    case 'tinhot':
        $controller = new Tinhot();
        require_once 'models/tinhot.php';
        break;

    case 'tintuc':
        $controller = new Tintuc();
        require_once 'models/tintuc.php';
        break;

    case 'nhacmoi':
        $controller = new Nhacmoi();
        require_once 'models/nhacmoi.php';
        break;

    case 'nghenhac':
        $controller = new Nghenhac();
        require_once 'models/nghenhac.php';
        break;
}

$controller->{ $action }();

?>



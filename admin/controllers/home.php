<?php
class Home {
    public static function index(){
        $dsth = ModelTinhot::get_all();

        require_once 'views/tinhot/tinhot_view.php';
    }
}
 ?>


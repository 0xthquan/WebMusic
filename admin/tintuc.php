<?php
require_once 'config/db.php';
require_once 'controllers/tintuc.php';
require_once 'models/master.php';
require_once 'models/tintuc.php';
require_once 'upload.php';

if(isset($_GET['tieude'])){
    $tieude=$_GET['tieude'];

    header('Location: index.php?controller=tintuc&action=search&tieude='.$tieude);
}

if(isset($_POST['tieude_create'])){
    $tieude_create=$_POST['tieude_create'];
    $noidung_create=$_POST['noidung_create'];
    $tomtat_create=$_POST['tomtat_create'];
    $chude_create=$_POST['chude_create'];

    $btn_name='btn_tao_tintuc';
    $file_name='anhdaidien_create';
    $path_folder_store='res/images/tintuc/';

    $path_database = Upload::upload_file($btn_name,$file_name,$path_folder_store);

    $controller = new Tintuc();
    $controller->insert($tieude_create,$noidung_create,$tomtat_create,$chude_create,$path_database);
}

if(isset($_POST['tieude_edit'])){
    $id=$_GET['id'];
    $tieude_edit=$_POST['tieude_edit'];
    $noidung_edit=$_POST['noidung_edit'];
    $tomtat_edit=$_POST['tomtat_edit'];
    $chude_edit=$_POST['chude_edit'];

    $btn_name='btn_sua_tintuc';
    $file_name='anhdaidien_edit';
    $path_folder_store='res/images/tintuc/';

    $path_database = Upload::upload_file($btn_name,$file_name,$path_folder_store);

    $controller = new Tintuc();
    $controller->update($id,$tieude_edit,$noidung_edit,$tomtat_edit,$chude_edit,$path_database);
}

?>

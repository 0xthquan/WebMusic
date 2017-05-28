<?php
require_once 'config/db.php';
require_once 'controllers/nghenhac.php';
require_once 'models/master.php';
require_once 'models/nghenhac.php';
require_once 'upload.php';

if(isset($_GET['tenbaihat'])){
    $tenbaihat=$_GET['tenbaihat'];

    header('Location: index.php?controller=nghenhac&action=search&tenbaihat='.$tenbaihat);
}

if(isset($_POST['tenbaihat_create'])){
    $tenbaihat_create=$_POST['tenbaihat_create'];
    $loibaihat_create=$_POST['loibaihat_create'];
    $casy_create=$_POST['casy_create'];
    $tacgia_create=$_POST['tacgia_create'];
    $theloai_create=$_POST['theloai_create'];

    $btn_name='btn_tao_nghenhac';
    $file_name='duongdan_create';
    $path_folder_store='res/songs/';

    $path_database = Upload::upload_file($btn_name,$file_name,$path_folder_store);

    $controller = new Nghenhac();
    $controller->insert($tenbaihat_create,$loibaihat_create,$casy_create,$tacgia_create,$theloai_create,$path_database);
}

if(isset($_POST['tenbaihat_edit'])){
    $id=$_GET['id'];
    $tenbaihat_edit=$_POST['tenbaihat_edit'];
    $loibaihat_edit=$_POST['loibaihat_edit'];
    $casy_edit=$_POST['casy_edit'];
    $tacgia_edit=$_POST['tacgia_edit'];
    $theloai_edit=$_POST['theloai_edit'];

    $btn_name='btn_sua_nghenhac';
    $file_name='duongdan_edit';
    $path_folder_store='res/songs/';

    $path_database = Upload::upload_file($btn_name,$file_name,$path_folder_store);

    $controller = new Nghenhac();
    $controller->update($id,$tenbaihat_edit,$loibaihat_edit,$casy_edit,$tacgia_edit,$theloai_edit,$path_database);
}

?>

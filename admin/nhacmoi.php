<?php
require_once 'config/db.php';
require_once 'controllers/nhacmoi.php';
require_once 'models/master.php';
require_once 'models/nhacmoi.php';
require_once 'upload.php';

if(isset($_GET['tenbaihat'])){
    $tenbaihat=$_GET['tenbaihat'];

    header('Location: index.php?controller=nhacmoi&action=search&tenbaihat='.$tenbaihat);
}

if(isset($_POST['tenbaihat_create'])){
    $tenbaihat_create=$_POST['tenbaihat_create'];
    $casy_create=$_POST['casy_create'];
    $tacgia_create=$_POST['tacgia_create'];
    $theloai_create=$_POST['theloai_create'];
    $noidung_create=$_POST['noidung_create'];
    $tomtat_create=$_POST['tomtat_create'];
    $duongdan_create=$_POST['duongdan_create'];

    $btn_name='btn_tao_nhacmoi';
    $file_name_duongdan='duongdan_create';
    $file_name_anhdaidien='anhdaidien_create';
    $path_folder_store_duongdan='res/songs/';
    $path_folder_store_anhdaidien='res/images/nhacmoi/';

    $path_database_duongdan = Upload::upload_file($btn_name,$file_name_duongdan,$path_folder_store_duongdan);
    $path_database_anhdaidien = Upload::upload_file($btn_name,$file_name_anhdaidien,$path_folder_store_anhdaidien);

    $controller = new Nhacmoi();
    $controller->insert($tenbaihat_create,$casy_create,$tacgia_create,$theloai_create,$noidung_create,$tomtat_create,$path_database_duongdan,$path_database_anhdaidien);
}

if(isset($_POST['tenbaihat_edit'])){
    $id=$_GET['id'];
    $tenbaihat_edit=$_POST['tenbaihat_edit'];
    $casy_edit=$_POST['casy_edit'];
    $tacgia_edit=$_POST['tacgia_edit'];
    $theloai_edit=$_POST['theloai_edit'];
    $noidung_edit=$_POST['noidung_edit'];
    $tomtat_edit=$_POST['tomtat_edit'];
    $duongdan_edit=$_POST['duongdan_edit'];

    $btn_name='btn_sua_nhacmoi';
    $file_name_duongdan='duongdan_edit';
    $file_name_anhdaidien='anhdaidien_edit';
    $path_folder_store_duongdan='res/songs/';
    $path_folder_store_anhdaidien='res/images/nhacmoi/';

    $path_database_duongdan = Upload::upload_file($btn_name,$file_name_duongdan,$path_folder_store_duongdan);
    $path_database_anhdaidien = Upload::upload_file($btn_name,$file_name_anhdaidien,$path_folder_store_anhdaidien);

    $controller = new Nhacmoi();
    $controller->update($id,$tenbaihat_edit,$casy_edit,$tacgia_edit,$theloai_edit,$noidung_edit,$tomtat_edit,$path_database_duongdan,$path_database_anhdaidien);
}

?>

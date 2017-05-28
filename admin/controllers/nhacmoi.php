<?php
class Nhacmoi{
    public static function view(){
        $dsnm = ModelNhacmoi::get_all();

        require_once 'views/nhacmoi/nhacmoi_view.php';
    }

    public static function search(){
        $tenbaihat = $_GET['tenbaihat'];
        $dsnm = ModelNhacmoi::search_by_tenbaihat($tenbaihat);

        require_once 'views/nhacmoi/nhacmoi_view.php';
    }

    public static function delete(){
        $id = $_GET['id'];
        ModelNhacmoi::delete_by_id($id);

        $dsnm = ModelNhacmoi::get_all();
        require_once 'views/nhacmoi/nhacmoi_view.php';
    }

    public static function create(){
        require_once 'views/nhacmoi/nhacmoi_create.php';
    }

    public static function insert($tenbaihat_create,$casy_create,$tacgia_create,$theloai_create,$noidung_create,$tomtat_create,$duongdan_create,$anhdaidien_create){
        ModelNhacmoi::insert_nhacmoi($tenbaihat_create,$casy_create,$tacgia_create,$theloai_create,$noidung_create,$tomtat_create,$duongdan_create,$anhdaidien_create);

        header('Location: index.php?controller=nhacmoi&action=view');
    }

    public static function edit(){
        $id = $_GET['id'];
        $result = ModelNhacmoi::get_by_id($id);

        while ($row=mysql_fetch_row($result)) {
        $tenbaihat_edit = $row[1];
        $casy_edit = $row[2];
        $tacgia_edit = $row[3];
        $theloai_edit = $row[4];
        $noidung_edit = $row[5];
        $tomtat_edit = $row[6];
        $loibaihat_edit = $row[7];
        }

        require_once 'views/nhacmoi/nhacmoi_edit.php';
    }

    public static function update($id,$tenbaihat_edit,$casy_edit,$tacgia_edit,$theloai_edit,$noidung_edit,$tomtat_edit,$duongdan_edit,$anhdaidien_edit){
        ModelNhacmoi::update_nhacmoi($id,$tenbaihat_edit,$casy_edit,$tacgia_edit,$theloai_edit,$noidung_edit,$tomtat_edit,$duongdan_edit,$anhdaidien_edit);

        header('Location: index.php?controller=nhacmoi&action=view');
    }

    public static function read(){
        $id = $_GET['id'];
        $result = ModelNhacmoi::get_by_id($id);

        while ($row=mysql_fetch_row($result)) {
        $tenbaihat = $row[1];
        $casy = $row[2];
        $tacgia = $row[3];
        $theloai = $row[4];
        $noidung = $row[5];
        $tomtat = $row[6];
        $loibaihat = $row[7];
        }

        require_once 'views/nhacmoi/nhacmoi_read.php';
    }

}
?>

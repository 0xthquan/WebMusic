<?php
class Nghenhac{
    public static function view(){
        $dsnn = ModelNghenhac::get_all();

        require_once 'views/nghenhac/nghenhac_view.php';
    }

    public static function search(){
        $tenbaihat = $_GET['tenbaihat'];
        $dsnn = ModelNghenhac::search_by_tenbaihat($tenbaihat);

        require_once 'views/nghenhac/nghenhac_view.php';
    }

    public static function delete(){
        $id = $_GET['id'];
        ModelNghenhac::delete_by_id($id);

        $dsnn = ModelNghenhac::get_all();
        require_once 'views/nghenhac/nghenhac_view.php';
    }

    public static function create(){
        require_once 'views/nghenhac/nghenhac_create.php';
    }

    public static function insert($tenbaihat_create,$loibaihat_create,$casy_create,$tacgia_create,$theloai_create,$duongdan_create){
        ModelNghenhac::insert_nghenhac($tenbaihat_create,$loibaihat_create,$casy_create,$tacgia_create,$theloai_create,$duongdan_create);

        header('Location: index.php?controller=nghenhac&action=view');
    }

    public static function edit(){
        $id = $_GET['id'];
        $result = ModelNghenhac::get_by_id($id);

        while ($row=mysql_fetch_row($result)) {
        $tenbaihat_edit = $row[1];
        $loibaihat_edit = $row[2];
        $casy_edit = $row[3];
        $tacgia_edit = $row[4];
        $theloai_edit = $row[5];
        }

        require_once 'views/nghenhac/nghenhac_edit.php';
    }

    public static function update($id,$tenbaihat_edit,$loibaihat_edit,$casy_edit,$tacgia_edit,$theloai_edit,$duongdan_edit){
        ModelNghenhac::update_nghenhac($id,$tenbaihat_edit,$loibaihat_edit,$casy_edit,$tacgia_edit,$theloai_edit,$duongdan_edit);

        header('Location: index.php?controller=nghenhac&action=view');
    }

    public static function read(){
        $id = $_GET['id'];
        $result = ModelNghenhac::get_by_id($id);

        while ($row=mysql_fetch_row($result)) {
        $tenbaihat = $row[1];
        $loibaihat = $row[2];
        $casy = $row[3];
        $tacgia = $row[4];
        $theloai = $row[5];
        }

        require_once 'views/nghenhac/nghenhac_read.php';
    }
}
?>

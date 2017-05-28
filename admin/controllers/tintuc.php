<?php
class Tintuc{
    public static function view(){
        $dstt = ModelTintuc::get_all();

        require_once 'views/tintuc/tintuc_view.php';
    }

    public static function search(){
        $tieude = $_GET['tieude'];
        $dstt = ModelTintuc::search_by_tieude($tieude);

        require_once 'views/tintuc/tintuc_view.php';
    }

    public static function delete(){
        $id = $_GET['id'];
        ModelTintuc::delete_by_id($id);

        $dstt = ModelTintuc::get_all();
        require_once 'views/tintuc/tintuc_view.php';
    }

    public static function create(){
        require_once 'views/tintuc/tintuc_create.php';
    }

    public static function insert($tieude_create,$noidung_create,$tomtat_create,$chude_create,$anhdaidien_create){
        ModelTintuc::insert_tintuc($tieude_create,$noidung_create,$tomtat_create,$chude_create,$anhdaidien_create);

        header('Location: index.php?controller=tintuc&action=view');
    }

    public static function edit(){
        $id = $_GET['id'];
        $result = ModelTintuc::get_by_id($id);

        while ($row=mysql_fetch_row($result)) {
        $tieude_edit = $row[1];
        $noidung_edit = $row[2];
        $tomtat_edit = $row[3];
        $chude_edit = $row[4];
        }

        require_once 'views/tintuc/tintuc_edit.php';
    }

    public static function update($id,$tieude_edit,$noidung_edit,$tomtat_edit,$chude_edit,$anhdaidien_edit){
        ModelTintuc::update_tintuc($id,$tieude_edit,$noidung_edit,$tomtat_edit,$chude_edit,$anhdaidien_edit);

        header('Location: index.php?controller=tintuc&action=view');
    }

    public static function read(){
        $id = $_GET['id'];
        $result = ModelTintuc::get_by_id($id);

        while ($row=mysql_fetch_row($result)) {
        $tieude = $row[1];
        $noidung = $row[2];
        $tomtat = $row[3];
        $chude = $row[4];
        }

        require_once 'views/tintuc/tintuc_read.php';
    }
}
?>

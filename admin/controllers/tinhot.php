<?php
class Tinhot{
    public static function view(){
        $dsth = ModelTinhot::get_all();
        require_once 'views/tinhot/tinhot_view.php';
    }

    public static function search(){
        $tieude = $_GET['tieude'];
        $dsth = ModelTinhot::search_by_tieude($tieude);
        require_once 'views/tinhot/tinhot_view.php';
    }

    public static function delete(){
        $id = $_GET['id'];
        ModelTinhot::delete_by_id($id);

        $dsth = ModelTinhot::get_all();
        require_once 'views/tinhot/tinhot_view.php';
    }

    public static function create(){
        require_once 'views/tinhot/tinhot_create.php';
    }

    public static function insert($tieude_create,$noidung_create,$tomtat_create,$chude_create,$anhdaidien_create){
        ModelTinhot::insert_tinhot($tieude_create,$noidung_create,$tomtat_create,$chude_create,$anhdaidien_create);

        header('Location: index.php?controller=tinhot&action=view');
    }

    public static function edit(){
        $id = $_GET['id'];
        $result = ModelTinhot::get_by_id($id);

        while ($row=mysql_fetch_row($result)) {
        $tieude_edit = $row[1];
        $noidung_edit = $row[2];
        $tomtat_edit = $row[3];
        $chude_edit = $row[4];
        }

        require_once 'views/tinhot/tinhot_edit.php';
    }

    public static function update($id,$tieude_edit,$noidung_edit,$tomtat_edit,$chude_edit,$anhdaidien_edit){
        ModelTinhot::update_tinhot($id,$tieude_edit,$noidung_edit,$tomtat_edit,$chude_edit,$anhdaidien_edit);

        header('Location: index.php?controller=tinhot&action=view');
    }

    public static function read(){
        $id = $_GET['id'];
        $result = ModelTinhot::get_by_id($id);

        while ($row=mysql_fetch_row($result)) {
        $tieude = $row[1];
        $noidung = $row[2];
        $tomtat = $row[3];
        $chude = $row[4];
        }

        require_once 'views/tinhot/tinhot_read.php';
    }

}
?>

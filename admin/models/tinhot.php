<?php
class ModelTinhot extends MasterModel{
    public static function get_all(){
        return parent::get_all_from('tinhot');
    }

    public static function get_by_id($id){
        return parent::get_by_column('tinhot','ID',$id);
    }

    public static function search_by_tieude($tieude){
        return parent::search('tinhot','TieuDe',"N'%".$tieude."%'");
    }

    public static function delete_by_id($id){
        return parent::delete('tinhot','ID',$id);
    }

    public static function insert_tinhot($td,$nd,$tt,$cd,$add){
        $link = Database::connect();

        $sql="INSERT INTO tinhot(TieuDe,NoiDung,TomTat,ChuDe,AnhDaiDien) VALUES(N'$td',N'$nd',N'$tt',N'$cd',N'$add')";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }

    public static function update_tinhot($id,$td,$nd,$tt,$cd,$add){
        $link = Database::connect();

        $sql="UPDATE tinhot SET TieuDe=N'$td',NoiDung=N'$nd',TomTat=N'$tt',ChuDe=N'$cd',AnhDaiDien=N'$add' WHERE ID=$id ";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }
}
?>

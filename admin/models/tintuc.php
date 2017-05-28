<?php
class ModelTintuc extends MasterModel{
    public static function get_all(){
        return parent::get_all_from('tintuc');
    }

    public static function get_by_id($id){
        return parent::get_by_column('tintuc','ID',$id);
    }

    public static function search_by_tieude($tieude){
        return parent::search('tintuc','TieuDe',"N'%".$tieude."%'");
    }

    public static function delete_by_id($id){
        return parent::delete('tintuc','ID',$id);
    }

    public static function insert_tintuc($td,$nd,$tt,$cd,$add){
        $link = Database::connect();

        $sql="INSERT INTO tintuc(TieuDe,NoiDung,TomTat,ChuDe,AnhDaiDien) VALUES(N'$td',N'$nd',N'$tt',N'$cd',N'$add')";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }

    public static function update_tintuc($id,$td,$nd,$tt,$cd,$add){
        $link = Database::connect();

        $sql="UPDATE tintuc SET TieuDe=N'$td',NoiDung=N'$nd',TomTat=N'$tt',ChuDe=N'$cd',AnhDaiDien=N'$add' WHERE ID=$id ";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }
}
?>

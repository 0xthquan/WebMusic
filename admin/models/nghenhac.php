<?php
class ModelNghenhac extends MasterModel{
    public static function get_all(){
        return parent::get_all_from('nghenhac');
    }

    public static function get_by_id($id){
        return parent::get_by_column('nghenhac','ID',$id);
    }

    public static function search_by_tenbaihat($tenbaihat){
        return parent::search('nghenhac','TenBaiHat',"N'%".$tenbaihat."%'");
    }

    public static function delete_by_id($id){
        return parent::delete('nghenhac','ID',$id);
    }

    public static function insert_nghenhac($tenbaihat_create,$loibaihat_create,$casy_create,$tacgia_create,$theloai_create,$duongdan_create){
        $link = Database::connect();

        $sql="INSERT INTO nghenhac(TenBaiHat,LoiBaiHat,CaSy,TacGia,TheLoai,DuongDan) VALUES(N'$tenbaihat_create',N'$loibaihat_create',N'$casy_create',N'$tacgia_create',N'$theloai_create',N'$duongdan_create')";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }

    public static function update_nghenhac($id,$tenbaihat_edit,$loibaihat_edit,$casy_edit,$tacgia_edit,$theloai_edit,$duongdan_edit){
        $link = Database::connect();

        $sql="UPDATE nghenhac SET TenBaiHat=N'$tenbaihat_edit',LoiBaiHat=N'$loibaihat_edit',CaSy=N'$casy_edit',TacGia=N'$tacgia_edit',TheLoai=N'$theloai_edit',DuongDan=N'$duongdan_edit' WHERE ID=$id ";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }
}
?>

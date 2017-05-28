<?php
class ModelNhacmoi extends MasterModel{
    public static function get_all(){
        return parent::get_all_from('nhacmoi');
    }

    public static function get_by_id($id){
        return parent::get_by_column('nhacmoi','ID',$id);
    }

    public static function search_by_tenbaihat($tenbaihat){
        return parent::search('nhacmoi','TenBaiHat',"N'%".$tenbaihat."%'");
    }

    public static function delete_by_id($id){
        return parent::delete('nhacmoi','ID',$id);
    }

    public static function insert_nhacmoi($tenbaihat_create,$casy_create,$tacgia_create,$theloai_create,$noidung_create,$tomtat_create,$duongdan_create,$anhdaidien_create){
        $link = Database::connect();

        $sql="INSERT INTO nhacmoi(TenBaiHat,CaSy,TacGia,TheLoai,NoiDung,TomTat,DuongDan,AnhDaiDien) VALUES(N'$tenbaihat_create',N'$casy_create',N'$tacgia_create',N'$theloai_create',N'$noidung_create',N'$tomtat_create',N'$duongdan_create',N'$anhdaidien_create')";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }

    public static function update_nhacmoi($id,$tenbaihat_edit,$casy_edit,$tacgia_edit,$theloai_edit,$noidung_edit,$tomtat_edit,$duongdan_edit,$anhdaidien_edit){
        $link = Database::connect();

        $sql="UPDATE nhacmoi SET TenBaiHat=N'$tenbaihat_edit',CaSy=N'$casy_edit',TacGia=N'$tacgia_edit',TheLoai=N'$theloai_edit',NoiDung=N'$noidung_edit',TomTat=N'$tomtat_edit',DuongDan=N'$duongdan_edit',AnhDaiDien=N'$anhdaidien_edit' WHERE ID=$id ";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }
}
?>

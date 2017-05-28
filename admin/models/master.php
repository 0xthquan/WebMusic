<?php
class MasterModel{
    public static function get_all_from($table){
        $link = Database::connect();

        $sql="SELECT * FROM $table";
        $result=mysql_query($sql, $link);

        if(!$result){
            echo "Could not query!".mysql_error();
           exit;
        }
        mysql_close($link);

        return $result;
    }

    public static function get_by_column($table,$column,$value){
        $link = Database::connect();

        $sql="SELECT * FROM $table WHERE $column=$value";
        $result=mysql_query($sql, $link);

        if(!$result){
            echo "Could not query!".mysql_error();
           exit;
        }
        mysql_close($link);

        return $result;
    }

    public static function search($table,$column,$value){
        $link = Database::connect();

        $sql="SELECT * FROM $table WHERE $column LIKE $value";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
           exit;
        }
        mysql_close($link);

        return $result;
    }

    public static function delete($table,$column,$value){
        $link = Database::connect();

        $sql="DELETE FROM $table WHERE $column=$value";
        $result=mysql_query($sql, $link);
        if(!$result){
            echo "Could not query!".mysql_error();
            exit;
        }
        mysql_close($link);
    }
}
?>

<?php
class Database {
    private static $dbName='DBgioithieuamnhac';

    public static function connect(){
        $link=mysql_connect("localhost","root","") or die("Connect db failed!");
        mysql_select_db(self::$dbName, $link);
        mysql_query("SET character_set_results=utf8");

        return $link;
    }
}
?>

<?php
class Admin{
    public static function check($username,$password){
        $dsad = ModelAdmin::get_all();

        while ($row=mysql_fetch_row($dsad)) {
             if($username==$row[1]&&$password=$row[2]){
                 session_start();
                 $_SESSION['username']=$username;
                 $_SESSION['password']=$password;
                 header('Location: index.php?controller=home&action=index');
                 return true;
             }
        }

        return false;
    }
}
?>

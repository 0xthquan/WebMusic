<?php

class Upload{
    public static function upload_file($btn_name,$file_name,$path){
        if(isset($_POST[$btn_name])){ // Người dùng đã ấn submit
            if($_FILES[$file_name]['name'] != NULL){ // Đã chọn file
                // Tiến hành code upload file
                if($_FILES[$file_name]['type'] == "image/jpeg"
                || $_FILES[$file_name]['type'] == "image/png"
                || $_FILES[$file_name]['type'] == "image/gif"
                || $_FILES[$file_name]['type'] == "audio/mp3"
                || $_FILES[$file_name]['type'] == "audio/mpeg"
                || $_FILES[$file_name]['type'] == "audio/mp4"
                || $_FILES[$file_name]["type"] == "audio/wav"){
                // là file ảnh
                // Tiến hành code upload
                    if($_FILES[$file_name]['size'] > 52428800){//50MB
                        echo "File không được lớn hơn 50mb";

                        return "File không được lớn hơn 50mb";
                    }else{
                        // file hợp lệ, tiến hành upload
                        $tmp_name = $_FILES[$file_name]['tmp_name'];
                        $name = $_FILES[$file_name]['name'];
                        $type = $_FILES[$file_name]['type'];
                        $size = $_FILES[$file_name]['size'];
                        $cur  = "../";
                        // Upload file
                        move_uploaded_file($tmp_name,$cur.$path.$name);
                        echo "File uploaded! <br />";
                        echo "Tên file : ".$name."<br />";
                        echo "Kiểu file : ".$type."<br />";
                        echo "File size : ".$size;

                        return $path.$name;
                    }
                }else{
                   // không phải file ảnh
                   echo "Kiểu file không hợp lệ";

                   return "Kiểu file không hợp lệ";
                }
            }else{
                echo "Vui lòng chọn file";

                return "Vui lòng chọn file";
            }
            return "Chưa chọn file";
        }
        return "Chưa ấn submit";
    }
}
?>

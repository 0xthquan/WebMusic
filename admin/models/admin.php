<?php
class ModelAdmin extends MasterModel{
    public static function get_all(){
        return parent::get_all_from('admin');
    }
}
?>

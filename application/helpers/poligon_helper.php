<?php

if (!function_exists("uuid_generator")) {

    function uuid_generator() {
        $CI = & get_instance();
        $get = $CI->db->query("select uuid() as uid")->row();
        return $get->uid;
    }

}

if (!function_exists("uuid_auto")) {

    function uuid_auto($id, $table) {
        $CI = & get_instance();
        $get = $CI->db->query("SELECT MAX($id)+1 as id FROM  $table")->row();    
        if (!empty($get->id)){
            return $get->id; 
         }  else {
        return 1; 
        }

    }
}

if (!function_exists("auto_inc")) {

    function auto_inc($id, $table) {
        $CI = & get_instance();
        $get = $CI->db->query("SELECT MAX($id)+1 as id FROM  $table")->row();
        if (!empty($get->id)){
           return $get->id; 
        }  else {
            return 1;
        }
        
    }

}
?>

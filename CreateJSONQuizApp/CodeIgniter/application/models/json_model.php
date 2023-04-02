<?php
class json_model extends CI_Model{
    public function insert_json_in_db($json_data){
        $this->db->insert('emp',$json_data);
        if($this->db->affected_rows()>0){
            return true;
        }else {
            return false;
        }
    }
}

?>
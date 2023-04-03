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

    public function seeJSON(){
        // $this->load->database(); -> this line i don't have to write here because i have auto reload it from autoload libraries
        $result=$this->db->query("select data from emp");

        return $result->result_array();
    }
}

?>
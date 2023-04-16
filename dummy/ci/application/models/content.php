<?php
class content extends CI_Model{
    function fetch_all_articles(){
        $result=$this->db->query("select * from  tutorials");

        return $result->result_array();
    }

    function fetch_all_links(){
        $res=$this->db->query("select * from  techlinks");

        return $res->result_array();
    }
}

?>
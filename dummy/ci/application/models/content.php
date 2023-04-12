<?php
class content extends CI_Model{
    function fetch_all_articles(){
        $result=$this->db->query("select * from  tutorials");

        return $result->result_array();
    }

    // function fetch_blog_detail($blog_id){
    //     $result=$this->db->query("select * from articles where blogid='$blog_id'"); 
    //     return $result->result_array();
    // }
}

?>
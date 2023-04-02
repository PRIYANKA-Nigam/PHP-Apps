<?php
class ArticlesModel extends CI_Model{
    function fetch_all_articles(){
        $result=$this->db->query("select * from articles where status='1'");

        return $result->result_array();
    }

    function fetch_blog_detail($blog_id){
        $result=$this->db->query("select * from articles where blogid='$blog_id'"); 
        return $result->result_array();
    }
}

?>
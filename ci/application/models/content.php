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
    public function getQuestions($quiz)
	{
		$this->db->select("qid,question,option1,option2,option3,option4,answer");
		$this->db->from("$quiz");

		$query= $this->db->get();
		return $query->result();
		$data_returned = $query->num_rows;
		if($data_returned<1){
			echo "There is no data in the database";
			exit();
		}

	}
	
}

?>
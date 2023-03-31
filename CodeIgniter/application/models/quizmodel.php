<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quizmodel extends CI_Model {
	public function getQuestions()
	{
		$this->db->select("qid,question,choice1,choice2,choice3,answer");
		$this->db->from("quizgame");

		$query= $this->db->get();
		return $query->result();
		$data_returned = $query->num_rows;
		if($data_returned<1){
			echo "There is no data in th edatabase";
			exit();
		}

	}
}

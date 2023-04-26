<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function quizdisplay()
	{
		$this->load->model('quizmodel');
        $this->data['Questions'] = $this->quizmodel->getQuestions();
        $this->load->view('play_quiz',$this->data);
	}

    public function resultdisplay()
	{  
        $this->data['checks'] = array(
            'ques1'=> $this->input->post('qid1'),
            'ques2'=> $this->input->post('qid2'),
            'ques3'=> $this->input->post('qid3'),
            'ques4'=> $this->input->post('qid4'),
            'ques5'=> $this->input->post('qid5'),
        );
        $this->load->model('quizmodel');
        $this->data['results'] = $this->quizmodel->getQuestions();
        $this->load->view('result_display',$this->data);



    }
}

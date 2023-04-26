<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 var $p;
	public function index()
	{        $this->load->Model('content',"am");
		$result=$this->am->fetch_all_articles();
		// print_r($result);
		// die();
		$data['result']=$result;
		$res=$this->am->fetch_all_links();
		$data1['result']=$res;
	
		
		$this->load->view('dashboard',['result'=>$result,'res'=>$res]);
	//	$this->load->view('welcome_message');
	}
	public function test()
	{
		$this->load->Model('content',"am");
		$result=$this->am->fetch_all_articles();
		$data['result']=$result;
		$this->load->view('test',$data);
	}
	public function test2()
	{
		$this->load->Model('content',"am");
		$result=$this->am->fetch_all_links();
		$data['result']=$result;
		$this->load->view('test2',$data);
	}
	public function test3()
	{
		$this->load->view('test3');
	}
	public function test4()
	{
		$this->load->view('test4');
	}
	public function techDomain(){
		$this->load->view('techDomain');
	}
	public function Blog()
	{
		$this->load->view('BLogs');	
	}
	public function Tutorials()
	{ $this->load->Model('content',"am");
		$result=$this->am->fetch_all_articles();
		// print_r($result);
		// die();
		$data['result']=$result;
		$this->load->view('tutorials',$data);
		// $this->load->view('tutorials');	
	}
	public function Technology()
	{
		$this->load->view('techLinks');	
	}
	public function AppPreview()
	{
		$this->load->view('appPreview');	
	}
	public function Quiz()
	{
		$this->load->view('quiz');	
	}
	public function Quizdisplay($quiz){
	//	$this->p=$quiz;
	//	$data['quiz']=$quiz;
		$this->load->model('content');
        $this->data['Questions'] = $this->content->getQuestions($quiz);
		$data['quiz']=$this->input->post('q');
	
        $this->load->view('play_quiz',$this->data);
		//$this->resultdisplay($data);
	}
	public function resultdisplay($data){
		$this->data['checks'] = array(
            'ques1'=> $this->input->post('qid1'),
            'ques2'=> $this->input->post('qid2'),
            'ques3'=> $this->input->post('qid3'),
            'ques4'=> $this->input->post('qid4'),
            'ques5'=> $this->input->post('qid5'),
			'ques6'=> $this->input->post('qid6'),
			'ques7'=> $this->input->post('qid7'),
			'ques8'=> $this->input->post('qid8'),
			'ques9'=> $this->input->post('qid9'),
			'ques10'=> $this->input->post('qid10'),
			'ques11'=> $this->input->post('qid11'),
			'ques12'=> $this->input->post('qid12'),
			'ques13'=> $this->input->post('qid13'),
			'ques14'=> $this->input->post('qid14'),
			'ques15'=> $this->input->post('qid15'),
			'ques16'=> $this->input->post('qid16'),
			'ques17'=> $this->input->post('qid17'),
			'ques18'=> $this->input->post('qid18'),
			'ques19'=> $this->input->post('qid19'),
			'ques20'=> $this->input->post('qid20'),
			'ques21'=> $this->input->post('qid21'),
			'ques22'=> $this->input->post('qid22'),
			'ques23'=> $this->input->post('qid23'),
			'ques24'=> $this->input->post('qid24'),
			'ques25'=> $this->input->post('qid25'),
			'ques26'=> $this->input->post('qid25'),
			'ques27'=> $this->input->post('qid27'),
			'ques28'=> $this->input->post('qid28'),
			'ques29'=> $this->input->post('qid29'),
			'ques30'=> $this->input->post('qid30'),
			'ques31'=> $this->input->post('qid31'),
			'ques32'=> $this->input->post('qid32'),
			'ques33'=> $this->input->post('qid33'),
			'ques34'=> $this->input->post('qid34'),
			'ques35'=> $this->input->post('qid35'),
			'ques36'=> $this->input->post('qid36'),
			'ques37'=> $this->input->post('qid37'),
			'ques38'=> $this->input->post('qid38'),
			'ques39'=> $this->input->post('qid39')
			
        );
        $this->load->model('content');
        $this->data['results'] = $this->content->getQuestions($data);
       $this->load->view('result_display',$this->data);
	//    $this->load->view('result_display');

	}
	public function springApps(){
		$this->load->view('springApps');
	}
}

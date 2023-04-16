<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{        $this->load->Model('content',"am");
		$result=$this->am->fetch_all_articles();
		// print_r($result);
		// die();
		$data['result']=$result;
		//$this->load->view('header',$data);
		$this->load->view('dashboard',$data);
	//	$this->load->view('welcome_message');
	}
	public function test()
	{
		// $this->load->view('header2');
		// $this->load->view('sidebar2');
		// $this->load->view('sidebar3');
		// $this->load->view('sidebar4');
		$this->load->view('test');
		// $this->load->view('sidebar6');
		// $this->load->view('sidebar7');
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

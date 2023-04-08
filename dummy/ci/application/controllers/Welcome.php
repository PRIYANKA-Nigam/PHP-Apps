<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{        $this->load->Model('content',"am");
		$result=$this->am->fetch_all_articles();
		// print_r($result);
		// die();
		$data['result']=$result;
		$this->load->view('header',$data);
	//	$this->load->view('welcome_message');
	}
	public function test()
	{
		$this->load->view('header');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{    $this->load->Model('ArticlesModel',"am");
		$result=$this->am->fetch_all_articles();
		// print_r($result);
		// die();
		$data['result']=$result;
		$this->load->view('blog_home_page',$data);
	}
	public function blog_detail($blog_id=0){
		$this->load->Model('ArticlesModel',"am");
		$result=$this->am->fetch_blog_detail($blog_id);
		$data['result']=$result;
		$this->load->view('blog_detail',$data);
	}
}

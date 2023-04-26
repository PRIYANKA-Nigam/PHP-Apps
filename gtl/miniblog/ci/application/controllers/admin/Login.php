<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { 
	public function index()  //http://[::1]/miniblog/ci/admin/Login
	{  //  $this->load->helper('url'); instead write array('url') inside autoload helper
		if(isset($_SESSION['user_id'])){
			redirect('admin/dashboard');
		}
		$data=[];
		if(isset($_SESSION['error'])){
			//die($_SESSION['error']);
			$data['error']=$_SESSION['error'];
			
		}else{
			$data['error']="No error";
		}
		$this->load->view('adminpanel/loginview',$data);
	}
	function login_post(){
		//$this->load->helper('url');
		print_r($_POST); //Array ( [email] => nigampriyanka042@gmail.com [password] => 456 )
		if(isset($_POST)){
			$email = $_POST['username'];
			$pwd=$_POST['password'];

		$query=	$this->db->query("select * from backendusers where username='$email' and password='$pwd'");
                 if($query->num_rows()){
                    $result = $query->result_array();
					// echo "<pre>";
					// print_r($result);
					// die();
					$this->session->set_userdata('user_id',$result[0]['id']);
					redirect('admin/dashboard');
				 }else{
                     $this->session->set_flashdata('error','Invalid credentials');
					 redirect('admin/Login');
				 }
		}else{
			die("Invalid input");
		}
	}
	function logout(){
		session_destroy();
		redirect('admin/Login');
	}
}

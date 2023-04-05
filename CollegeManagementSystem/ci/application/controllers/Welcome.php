<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends my_controller {
	public function index()
	{
		$this->load->model('queries');
		$chkAdminExists= $this->queries->chkAdminExists();
		$this->load->view('home',['chkAdminExists' => $chkAdminExists]);
	}
	public function adminRegister(){
		$this->load->model('queries');
		$roles= $this->queries->getRoles();
		$this->load->view('register',['roles' => $roles]);
	}
	public function adminSignup(){
		$this->form_validation->set_rules('username','Username','Required');
		$this->form_validation->set_rules('email','Email','Required');
		$this->form_validation->set_rules('gender','Gender','Required');
		$this->form_validation->set_rules('role_id','Role','Required');
		$this->form_validation->set_rules('password','Password','Required');
		$this->form_validation->set_rules('confirmPwd','Confirm Password','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
          $data = $this->input->post();
	$data['password']= sha1($this->input->post('password'));
	$data['confirmPwd']= sha1($this->input->post('confirmPwd'));
	$this->load->model('queries');
	if($this->queries->registerAdmin($data)){
      $this->session->set_flashdata('message','Admin Registered Successfully');
	  return redirect("welcome/adminRegister");
	}else{
		$this->session->set_flashdata('message','Failed to register Admin');
		return redirect("welcome/adminRegister");
	}
		}else{
             $this->adminRegister();
		}
	}
	public function login(){
		if($this->session->userData("user_id"))
        return redirect("admin/dashboard");
		$this->load->view('login');
	}
	public function signin(){
		$this->form_validation->set_rules('password','Password','Required');
		$this->form_validation->set_rules('email','Email','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password= sha1( $this->input->post('password'));
			$this->load->model('queries');
			$userExists = $this->queries->adminExists($email,$password);
			// echo '<pre>';
			// print_r($userExists);
			// echo '</pre>';
			if($userExists){
				if($userExists->role_id=='1'){
					$sessionData =[
						'user_id'=>$userExists->user_id,
						'username'=>$userExists->username,
						'email'=>$userExists->email,
						'role_id'=>$userExists->role_id,
					];
					$this->session->set_userdata($sessionData);
					return redirect("admin/dashboard");
				}else if($userExists->role_id=='2'){
					$sessionData =[
						'user_id'=>$userExists->user_id,
						'username'=>$userExists->username,
						'email'=>$userExists->email,
						'college_id'=>$userExists->college_id,
						'role_id'=>$userExists->role_id,
					];
					$this->session->set_userdata($sessionData);
					return redirect("users/dashboard");
				}
				
			}else{
                 $this->session->set_flashdata('message','Email or password is incorrect');
				 return redirect("welcome/login");
			}
		}else{
			$this->login();
		}
	}
	public function logout(){
		$this->session->unset_userdata("user_id");
		return redirect("welcome/login");
	}
    public function onLeave(){
		$this->load->model('queries');
		//$college= $this->queries->getCollege();
		// echo '<pre>';
		// print_r($college);
		// echo '</pre>';
		// exit();
    $leaves = $this->queries->getTotalLeaves();
		$this->load->view('onLeave',['leaves' => $leaves]);
	}
}

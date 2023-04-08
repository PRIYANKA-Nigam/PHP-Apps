<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends my_controller {
    public function dashboard(){
        $this->load->model('queries');
        $users = $this->queries->viewAllColleges();
        // echo '<pre>';
        //  print_r($users);
        // echo '</pre>';
        // exit();
        $this->load->view('dashboard',['users' =>$users]);
    }
    public function addCollege(){
       $this->load->view('addCollege');
    }
    public function createStudent(){
        $this->form_validation->set_rules('studentname','Student name','Required');
        $this->form_validation->set_rules('college_id','College Name','Required');
		$this->form_validation->set_rules('email','Email','Required');
		$this->form_validation->set_rules('gender','Gender','Required');
		$this->form_validation->set_rules('course','Course','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
            $data = $this->input->post();
            // echo '<pre>';
            //  print_r($data);
            // echo '</pre>';
            // exit();
            $this->load->model('queries');
            if($this->queries->insertStudent($data)){
              $this->session->set_flashdata('message','Added Student Successfully');
            }else{
                $this->session->set_flashdata('message','Failed to add Student');
            }
            return redirect("admin/addStudent");
        }else{
             $this->addStudent();
        }
    }
 public function addStudent(){
    $this->load->model('queries');
    $colleges= $this->queries->getColleges();
    $this->load->view('addStudent',['colleges'=> $colleges]);
    }
    public function viewStudents($college_id){
        $this->load->model('queries');
        $students = $this->queries->getStudents($college_id);
        // echo '<pre>';
        // print_r($students);
        // echo '</pre>';
        // exit();
     $this->load->view('viewStudents',['students' => $students]);
    }
    public function deleteStudents($id){
        $this->load->model('queries');
        if($this->queries->removeStudent($id)){
            return redirect("admin/dashboard");
        }
    }
    public function editStudents($id){
        $this->load->model('queries');
        $colleges = $this->queries->getColleges();
        $studentsData = $this->queries->getStudentRecord($id);
        $this->load->view('editStudent',['studentData'=> $studentsData,'colleges'=>$colleges]);
    }
    public function modifyStudent($id){
        $this->form_validation->set_rules('studentname','Student name','Required');
        $this->form_validation->set_rules('college_id','College Name','Required');
		$this->form_validation->set_rules('email','Email','Required');
		$this->form_validation->set_rules('gender','Gender','Required');
		$this->form_validation->set_rules('course','Course','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
            $data = $this->input->post();
            $this->load->model('queries');
            if($this->queries->updateStudent($data,$id)){
              $this->session->set_flashdata('message','Updated Student Successfully');
            }else{
                $this->session->set_flashdata('message','Failed to Update Student');
            }
            return redirect("admin/editStudents/{$id}");
        }else{
             $this->editStudents();
        }
    }
    public function createCollege(){
        $this->form_validation->set_rules('collegename','College Name','Required');
		$this->form_validation->set_rules('branch','Branch','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
          $data= $this->input->post();
          $this->load->model('queries');
          if($this->queries->makeCollege($data)){
             $this->session->set_flashdata('message','College created Successfully');
          }else{
            $this->session->set_flashdata('message','Failed to create College');
          }
          return redirect("admin/addCollege");
        }else{
      $this->addCollege();
        }
    }
    public function createCoadmin(){
        $this->form_validation->set_rules('username','Username','Required');
        $this->form_validation->set_rules('college_id','College Name','Required');
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
	if($this->queries->registerCoadmin($data)){
      $this->session->set_flashdata('message','Co-Admin Registered Successfully');
	}else{
		$this->session->set_flashdata('message','Failed to register Co-Admin');
	}
    return redirect("admin/addCoadmin");
		}else{
             $this->addCoadmin();
		}
    }
    public function addCoadmin(){
        $this->load->model('queries');
		$roles= $this->queries->getRoles();
        $colleges= $this->queries->getColleges();
		$this->load->view('addCoadmin',['roles' => $roles,'colleges'=> $colleges]);
    }
    public function coadmins(){
        $this->load->model('queries');
        $coadmins = $this->queries->viewAllColleges();
        $this->load->view('viewCoadmins',['coadmins' => $coadmins]);
    }
    public function addLeaveType(){
        $this->load->model('queries');
        $leaves = $this->queries->viewAllLeaves();
        $this->load->view('addLeaveType',['leaves'=> $leaves]);
    }
    public function createLeaveType(){
        $data = $this->input->post();
        $this->load->model('queries');
        if($this->queries->addLeavesType($data)){
           $this->session->set_flashdata('success','Leave created Successfully');
        }else{
          $this->session->set_flashdata('error','Failed to create Leave');
        }
        return redirect("admin/addLeaveType");
    }
    public function deleteLeaveType($id){
        $this->load->model('queries');
        $status = $this->queries->deleteLeaveType($id);
        if($status){
            $this->session->set_flashdata('message','Leave type deleted Successfully');
         }else{
           $this->session->set_flashdata('message','Failed to delete');
         }
         return redirect("admin/addLeaveType");
        
    }
    public function editLeaveType(){
        $id =$this->input->get('id');
        $type =$this->input->get('type');
        $data=array('id'=>$id,'leave_type'=>$type);
        $this->load->model('queries');
        $status = $this->queries->updateLeaveType($data,$id);
        if($status){
            $this->session->set_flashdata('message','Leave type edited Successfully');
         }else{
           $this->session->set_flashdata('message','Failed to edit');
         }
         echo $status;
         die();
         //return redirect("admin/addLeaveType");
    }
    public function __construct(){
        parent::__construct();
        if(!$this->session->userData("user_id"))
        return redirect("welcome/login");
    }


    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends my_controller {
public function dashboard(){
    $this->load->model('queries');
    $college_id = $this->session->userData('college_id');
    $students = $this->queries->getStudents($college_id);
    $this->load->view('users',['students'=> $students]);
}

public function applyLeave(){
    $this->load->model('queries');
    $leaves= $this->queries->viewAllLeaves();
    $this->load->view('applyLeave',['leaves' => $leaves]); 
}
public function insertApplyLeave(){
    $data = $this->input->post();
    $this->load->model('queries');
    if($this->queries->insertLeaves($data)){
       $this->session->set_flashdata('message','Applied for Leave Successfully');
    }else{
      $this->session->set_flashdata('message','Failed to apply');
    }
    return redirect("users/applyLeave");
}
public function viewLeave(){
    $this->load->model('queries');
    $username = $this->session->userData('username');
    $leaves = $this->queries->getLeaves($username);
    $this->load->view('viewLeave',['leaves'=> $leaves]);
}
public function attendance(){
    // $this->load->model('queries');
    // $students = $this->queries->getStudents();
    // $this->load->view('attendance',['students' => $students]);
    $this->load->view('attendance');
}
}
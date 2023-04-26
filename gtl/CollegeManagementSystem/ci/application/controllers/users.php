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
public function attendance($college_id){
    $this->load->model('queries');
    $students = $this->queries->getStudents($college_id);
    $collegename = $this->queries->getCollegeName($college_id);
    $this->load->view('attendance',['students' => $students,'collegename'=> $collegename]);
    // $this->load->view('attendance');
}
public function attendanceHistory($collegename){
    $this->load->model('queries');
    $history = $this->queries->getAttendanceHistory($collegename);
    $this->load->view('attendanceHistory',['history' => $history]); 
}
public function editAttendance($studentname,$date,$collegename){
    $this->load->model('queries');
    $history = $this->queries->updateAttendance($studentname,$date,$collegename);
    if($history){
        $this->session->set_flashdata('message','Updated Student status Successfully');
      }else{
          $this->session->set_flashdata('message','Failed to Update status');
      }
      return redirect("users/attendanceHistory/{$collegename}");
}
public function deleteAttendance($studentname,$date,$collegename){
    $this->load->model('queries');
    $history = $this->queries->DeleteAttendance($studentname,$date,$collegename);
    if($history){
        $this->session->set_flashdata('message','Record deleted Successfully');
      }else{
          $this->session->set_flashdata('message','Failed to delete record');
      }
      return redirect("users/attendanceHistory/{$collegename}");
}
public function attendancebyDate($collegename){
    $date = $this->input->post('date');
    $this->load->model('queries');
    $history = $this->queries->getAttendanceHistoryByDate($collegename,$date);
    $this->load->view('attendanceHistory',['history' => $history]); 
}
public function DeleteattendancebyDate($collegename){
    $date= $this->input->post('date2');
    $this->load->model('queries');
    $history = $this->queries->deleteAttendanceHistoryByDate($collegename,$date);
    if($history){
        $this->session->set_flashdata('message','Record deleted Successfully');
      }else{
          $this->session->set_flashdata('message','Failed to delete record');
      }
      return redirect("users/attendanceHistory/{$collegename}");
}
}

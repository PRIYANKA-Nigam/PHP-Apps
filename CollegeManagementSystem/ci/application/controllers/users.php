<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends my_controller {
public function dashboard(){
    $this->load->model('queries');
    $college_id = $this->session->userData('college_id');
    $students = $this->queries->getStudents($college_id);
    $this->load->view('users',['students'=> $students]);
}

}
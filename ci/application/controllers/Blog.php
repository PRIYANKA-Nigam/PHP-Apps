<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function Java()
	{
        $this->load->view('java');
    }

	public function Spring()
	{
        $this->load->view('spring');
    }
    public function Git()
	{   $query= $this->db->query("select * from blog order by blogid desc");
        $data['result'] = $query->result_array();
        $this->load->view('git',$data);
    }
    public function Git2()
	{  
        $this->load->view('git2');
    }
    public function DevOps()
	{
        $this->load->view('devOps');
    }
    public function Microservice()
	{
        $this->load->view('microservice');
    }
    public function Kafka()
	{
        $this->load->view('kafka');
    }
    public function Azure()
	{
        $this->load->view('azure');
    }
    public function Maven()
	{
        $this->load->view('maven');
    }
    public function JDBC()
	{
        $this->load->view('jdbc');
    }
    public function Jar()
	{
        $this->load->view('jar');
    }
    public function Jira()
	{
        $this->load->view('jira');
    }
    public function Api()
	{
        $this->load->view('api');
    }
    public function PHP()
	{
        $this->load->view('PHP');
    }
    public function Jenkins()
	{
        $this->load->view('jenkins');
    }
    public function SonarQube()
	{
        $this->load->view('sonarqube');
    }
    public function Spinnaker()
	{
        $this->load->view('spinnaker');
    }
    public function blogsAjax()
	{
        $this->load->view('blogsAjax');
    }
}

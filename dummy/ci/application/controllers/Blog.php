<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
        $this->load->view('java');
    }

	public function Spring()
	{
        $this->load->view('spring');
    }
    public function Git()
	{
        $this->load->view('git');
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
}

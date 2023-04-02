<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class form extends CI_Controller {
public function __construct(){
    parent::__construct();
    $this->load->model("json_model");
}
public function index()
	{        
		$this->load->view('view_form');
	}
    public function data_submitted(){
        $data=array(
            'question' => $this->input->POST('ques'),
            'option'=> $this->input->POST('select'),

        );
        $json_data['data']=json_encode($data); //data->column name of our emp table of attendance db
        // print_r($json_data);
        // exit;
        $return = $this->json_model->insert_json_in_db($json_data);
        if($return == true){
            $data['result_msg']='Json data successfully inserted into database';
        }else{
            $data['result_msg']='Please configure your database correctly';
        }
        $this->load->view("view_form",$data);
    }
}

?>
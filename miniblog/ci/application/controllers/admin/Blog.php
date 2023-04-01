<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function viewBlog()
	{
		$this->load->view('adminpanel/viewBlog.php');
	}
	public function addBlog()
	{
		$this->load->view('adminpanel/addBlog.php');
	}
    
	public function addBlog_post()
	{
		// print_r($_POST);
        // print_r($_FILES);

        if($_FILES){
            $config['upload_path']          = './assets/upload/blogimg/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
          

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file'))
            {
                    $error = array('error' => $this->upload->display_errors());
                      die("Error");
                   // $this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    // echo "<pre>";
                    // print_r($data);
                    // echo $data['upload_data']['file_name'];
                    //$this->load->view('upload_success', $data);
                    $fileurl= "assets/upload/blogimg/".$data['upload_data']['file_name'];
                    $blog_title=$_POST['blog_title'];
                    $desc=$_POST['desc'];

                 $query=$this->db->query("Insert into articles(blog_title,blog_desc,blog_image) values('$blog_title','$desc','$fileurl')");

                 if($query){
                    $this->session->set_flashdata('inserted', 'yes');
                    redirect('admin/Blog/addBlog');
                 }else{
                    $this->session->set_flashdata('inserted', 'no');
                    redirect('admin/Blog/addBlog');
                 }

            }
        }else{

        }
}
}

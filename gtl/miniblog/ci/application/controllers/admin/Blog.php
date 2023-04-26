<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function viewBlog()
	{ $query= $this->db->query("select * from articles order by blogid desc");
      $data['result'] = $query->result_array();
		$this->load->view('adminpanel/viewBlog.php',$data);
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
                    $status=$_POST['publish_unpublish'];
                 $query=$this->db->query("Insert into articles(blog_title,blog_desc,blog_image,status) 
                 values('$blog_title','$desc','$fileurl','$status')");

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
function editBlog($blog_id){
  // print_r($blog_id);

   $query=$this->db->query("select blogid,blog_title,blog_desc,blog_image,status from articles where blogid='$blog_id'");
   $data['result'] = $query->result_array();
   $data['blog_id'] = $blog_id;
   $this->load->view("adminpanel/editBlog",$data);
}

function editBlog_post(){
   // print_r($_POST);
   // print_r($_FILES);
   if($_FILES['file']['name']){
    //  die("Update File");

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
                    $blog_id=$_POST['blog_id'];
                    $status=$_POST['publish_unpublish'];
                 $query=$this->db->query("Update articles set blog_title='$blog_title' , blog_desc='$desc',blog_image='$fileurl',
                 status='$status' where  blogid='$blog_id'");

                 if($query){
                    $this->session->set_flashdata('updated', 'yes');
                    redirect('admin/Blog/viewBlog');
                 }else{
                    $this->session->set_flashdata('updated', 'no');
                    redirect('admin/Blog/viewBlog');
                 }

            }
   }else{
      $blog_title=$_POST['blog_title'];
      $desc=$_POST['desc'];
      $blog_id=$_POST['blog_id'];
      $status=$_POST['publish_unpublish'];
   $query=$this->db->query("Update articles set blog_title='$blog_title' , blog_desc='$desc',
   status='$status' where  blogid='$blog_id'");

   if($query){
      $this->session->set_flashdata('updated', 'yes');
      redirect('admin/Blog/viewBlog');
   }else{
      $this->session->set_flashdata('updated', 'no');
      redirect('admin/Blog/viewBlog');
   }
   }
}
function deleteBlog($blog_id){
 //  print_r($_POST);
   $delete_id=$blog_id;
   $query=$this->db->query("delete from articles where blogid='$delete_id'");
   if($query){
      echo "deleted";
   }else{
      echo "Not deleted" ;
   }
}
}

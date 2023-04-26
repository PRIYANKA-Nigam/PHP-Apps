
<?php $this->load->view("adminpanel/header");  ?> 
<br><br>
<h1>Dashboard</h1>
<hr><br>
<div class="row">
    <div class="col-md-3 flex-md-nowrap  alert alert-primary" role="alert">
      <a href="<?= base_url().'admin/Blog/viewBlog'?>">View Blog</a>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3   alert alert-info" role="alert">
      <a href="<?= base_url().'admin/Blog/addBlog'?>">Add Blog</a>
    </div>
     
</div>
     
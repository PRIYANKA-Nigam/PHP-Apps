
<?php $this->load->view("adminpanel/header");  ?>


   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
      <h2>Add Blog</h2>
      <form action="<?= base_url().'admin/Blog/addBlog_post' ?>"  method="post" enctype="multipart/form-data">
   <div class="form-group">
    <input type="text" class="form-control" name="blog_title" placeholder="Title">
   </div>
   <div class="form-group">
    <textarea class="form-control" name="desc" placeholder="Blog Description"></textarea>
   </div>
   <div class="form-group">
    <input type="file" class="form-control" name="file" placeholder="Title">
   </div>
   <div class="form-group">
   <button type="submit" class="btn btn-primary">Add Blog</button>
   </div>
      </form>
       
    </main>

    <script type="text/javascript">
<?php
if(isset($_SESSION['inserted'])){
    if($_SESSION['inserted']=="yes")
    {
        echo "alert('Data Inserted Successfully');";
    }else{
        echo "alert('Data Not Inserted');";
    }
}

?>
</script> 



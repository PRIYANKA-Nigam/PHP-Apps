
<?php $this->load->view("adminpanel/header");  ?>


   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 h3 mb-3 fw-normal">
      
      <h2>Edit Blog</h2><hr>
      <form action="<?= base_url().'admin/Blog/editBlog_post' ?>"  method="post" enctype="multipart/form-data" style="text-align: left;">
      <select class="custom-select" name="publish_unpublish">
    <option selected>select Mode of Blog Publishing</option>
    <option value="1" <?= ($result[0]['status'] =="1" ? "selected" : ""); ?>>Published</option>
    <option value="0" <?= ($result[0]['status'] =="0" ? "selected" : ""); ?>>Unpublished</option>
</select><hr>
    <input type="hidden" name="blog_id" value="<?= $blog_id  ?>" >
   <div class="form-group">
    <input type="text" value="<?= $result[0]['blog_title'] ?>" class="form-control" name="blog_title" placeholder="Title">
   </div>
   <div class="form-group">
    <textarea class="form-control" value="<?= $result[0]['blog_desc'] ?>" name="desc" placeholder="Blog Description"></textarea>
   </div>
   <br>
   <div class="form-group">
    <img src="<?= base_url().$result[0]['blog_image']?>" width="100">
    <input type="file" class="form-control"  name="file" placeholder="Title">
   </div><hr>
  
   <div class="form-group">
   <button type="submit" class="btn btn-primary">Edit Blog</button>
   </div>
      </form>
       
    </main>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
                        CKEDITOR.replace( 'desc' );
                </script>





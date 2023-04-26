
<?php $this->load->view("adminpanel/header");  ?>


   <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" 
   integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript">
$(".delete").click(function(){
   var delete_id=$(this).attr('data-id');
   var bool=confirm('Are you sure you want to delete this blog forever?');
   console.log(bool);
   if(bool){
    $.ajax({
      url:'<?= base_url().'admin/Blog/deleteBlog/'?>',
      type:'post',
      data:{'delete_id':delete_id},
      success:function(response){

      }
    });
   }else{
    alert("Your Blog is safe");
   }
});

</script> -->
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
      <h2>View Blog</h2>
   
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Sr.No</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if($result){ 
               $count=1;
               foreach($result as $key => $value){
                  echo "<tr>
                   <td>".$count."</td>
                   <td>".$value['blog_title']."</td>
                   <td>".$value['blog_desc']."</td>
                   <td><img src='".base_url().$value['blog_image']."' class='img-fluid' width='100'></td>
                   <td><a class=\"btn btn-info\" href='".base_url().'admin/Blog/editBlog/'.$value['blogid'].''."'>Edit</a></td>
                   <td><a class=\"btn delete btn-danger\" data-id='".$value['blogid']."' 
                   href='".base_url().'admin/Blog/deleteBlog/'.$value['blogid'].''."'>Delete</a></td>
                 </tr>";
                 $count=$count+1;
               }
                  
              }else{
               echo "<tr><td colspan='6'>No Records Found</td><tr>";
              }
             

              ?>
            
            
           
          </tbody>
        </table>
      </div>
    </main>
    <script type="text/javascript">
    <?php
if(isset($_SESSION['updated'])){
    if($_SESSION['updated']=="yes")
    {
        echo "alert('Data Updated Successfully');";
    }else{
        echo "alert('Data Not Updated');";
    }
}

?>  
</script>


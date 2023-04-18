<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style>
.mt-100{margin-top: 50px;}
.mt-30{margin-top: 30px;}
.mb-30{margin-bottom: 30px;}
</style>
        </head>
    <body  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="row">
    <a href="<?=base_url().'Welcome/'?>" ><button class="btn btn-success" >Back</button></a> 
    <div class="col-lg-12 mb-4">
          
<!-- Project Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Videos</h6>
    </div>
    <div class="card-body">
    <div class="album py-5 bg-light">
    <div class="container mt-100">
<h2 class="mb-30">Videos Details</h2>
        <ul class="list-group sidebar-nav">
<div class="row">  
        <?php
        $start=0; $current_page=1;
        $per_page=2; 
        $record=count($result);  
        $page=ceil($record/$per_page);
        if(isset($_GET['start'])){
          $start = $_GET['start'];
          if($start<=0){
            $start=0;
            $current_page=1;
          }else{
            $current_page=$start;
            $start--;
            $start = $start*$per_page;
          }
         
        }
       $sql ="select * from  tutorials limit $start,$per_page";
       $query = $this->db->query($sql);
       if($query->num_rows()>0){
        foreach($query->result() as $value){?>
          
          <div class="col-md-6">       
<li class="list-group-item"> <?php
              $data=$value->url;
    $final=str_replace('watch?v=','embed/',$data);
    echo "
    <iframe src='$final' 
    frameborder='0'
    allow='autoplay:encrypted-media'
    allowfullscreen>
    </iframe>
    ";
    ?></li> </div>
     <div class="col-md-6">    
    <li>This is my video title.irfh cdnj jdj cdj djc jndj djs ndj hdj bdjhb hdfb dcj 
      dcnj dnj dnjb cdjh jsdnk cnsdjk sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC
      nsdsjndc nsdk sdjn
    </li>  
     </div>  
    
            <?php  } }else { ?>
             No records Found !!
              <?php }?>
         
          
            </div>
      </ul> 
       <ul class="pagination mt-30" >
        <?php 
        for($i=1;$i<=$page;$i++){ 
          $class='';
          if($current_page==$i){
            $class='active';
          }
          ?>
        <li class="page-item <?php echo $class?>"><a class="page-link" href="?start=<?php echo $i?>"><?=$i?></a></li>
      <?php } ?>
    
       </ul>
  
  </div>
        </div>
        </div>
    </div>
</div>
                       
   </div>
   <?php 
        include('footer.php');
        ?>
</body>
</html>       
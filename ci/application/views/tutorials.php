
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style> 
 body{
  background: var(--primary-color);
  max-height: 100vh; 
  /* by giving max-height: 100vh the footer got stick to the bottom of the page */
}
</style> 
        </head>
    <body  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="row">
    <div id="google_element" style="float:right"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
    <a href="<?=base_url().'Welcome/'?>" ><button class="btn btn-success" >Back</button></a> 
    <div class="col-lg-12 mb-4">
          
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">Android tutorials</h2>
    </div>
    <div class="card-body">

    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <?php
          foreach($result as $key=>$value){
            // print_r($value);
            ?>
 <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"><?= $value['vid']?></p>
              <div class="d-flex justify-content-between align-items-center">
                <?php
              $data=$value['url'];
    $final=str_replace('watch?v=','embed/',$data);
    echo "
    <iframe src='$final' 
    frameborder='0'
    allow='autoplay:encrypted-media'
    allowfullscreen>
    </iframe>
    ";
    ?>
              </div>
              <h2><?=$value['title']?></h2>
            </div>
          </div>
        </div>
            <?php
          }
        ?>
       
        
  </div>
  </div>
        </div>
        </div>
    </div>

                                <div class="col-lg-12 mb-4">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">PHP tutorials</h2>
    </div>
    <div class="card-body">
    <div class="album py-5 bg-light">
    <div class="container mt-100">
<h2 class="mb-30">Videos Details</h2>
        <ul class="list-group sidebar-nav">
<div class="row">


          
        <?php
        $start=0; $current_page=1;
        $per_page=4; 
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
    <li><h3><?=$value->title?></h3>
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
        
</div>
                       
   </div>
   <a href='<?= base_url().'Welcome/springApps'?>' >
                    <button name="spring" class="btn bg-gradient-primary active" style="margin-left:50px;margin-bottom:20px;margin-top:0px">More
                  </button></a>
   <?php 
        include('footer.php');
        ?>
</body>
</html>       
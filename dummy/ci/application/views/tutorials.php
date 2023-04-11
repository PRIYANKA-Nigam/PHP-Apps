<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        </head>
    <body  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="row">
    <div class="col-lg-12 mb-4">

<!-- Project Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Videos</h6>
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
              <h2>xyz</h2>
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
</div>
                       
   </div>
   <?php 
        include('footer.php');
        ?>
</body>
</html>       
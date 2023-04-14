<?php
$p=$_GET['name'];

$path=base_url().'assets/images/'.$p;
?>
<html>
    <head>
        <title>App Preview</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
  <div style="background-color: black;" >
 <a href="<?=base_url().'Welcome/Technology'?>" ><button class="btn btn-success" >Back</button></a> 
<div id="carouselExampleIndicators" class="carousel slide">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" 
    aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 2"></button>
   
   
  </div>
  <div class="carousel-inner" style="margin-left:400px">
    <div class="carousel-item active" >
   <img src="<?=$path?>./a1.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a2.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a3.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a4.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a5.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a6.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a7.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a8.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a9.png" alt="App Preview" width="600" height="600">
    </div>
    <div class="carousel-item">
    <img src="<?=$path?>./a10.png" alt="App Preview" width="600" height="600">
    </div>
  </div>
 
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 
</div>
</div>
</div>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
        <style>
           .nav-item1{
                background-color:yellowgreen ;
                height: 50px;
                margin-top: 5px;
            }
.col{
    background: blueviolet;  
}
.p-6{
    align:right;
   text-align:right;
}
            </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
 <!-- Navigation bar -->

 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get2Logics</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../index.php">Home</a></li>
            <li><a class="dropdown-item" href="../index.php">About Us</a></li>
            <li><a class="dropdown-item" href="../index.php">Find Blogs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../login.php">Login</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../login.php">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
      <div class="nav-item1">Signed-in</div>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row gx-5" >
    <div class="col">
     <div class="p-6" onclick="location.href='new.php';" style="cursor:pointer;">
     <img src="" alt="Twitter">
     <img src="" alt="Github"> <img src="" alt="Facebook">
    </div>
    </div> 

  </div></div>
  <br><hr>
  <?php
         include("../login.php");
        ?>
    </body>
</html>
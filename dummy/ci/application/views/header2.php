<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style>
          /* body{
            align:center;
          } */
.col{
    background: blueviolet;
    margin:4px ;
}
.col-1{
    background: black;
    width:0.1px;
}
.col-5{
  background: black;
  width: 400px;
  height: 160px;
}
.wrapper{
  margin-left:15px ;
}
</style>
    </head>
    <body  >
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
            <li><a class="dropdown-item" href="index.php">Contact Us</a></li>
            <li><a class="dropdown-item" href="index.php">About Us</a></li>
            <li><a class="dropdown-item" href="index.php">Find Blogs</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="signup.php">Sign Up</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="signup.php">Reference Material</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Admin</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row gx-5" >
    <div class="col">
     <div class="p-3" onclick="location.href='<?= base_url().'Welcome/Blog'?>'" style="cursor:pointer;">Blogs</div>
    </div>   <div class="col-1"></div>
    <div class="col">
      <div class="p-3" onclick="location.href='<?= base_url().'Welcome/Tutorials'?>';" style="cursor:pointer;">Tutorials</div>
    </div> <div class="col-1"></div>
    <div class="col">
      <div class="p-3" onclick="location.href='<?= base_url().'Welcome/Technology'?>';" style="cursor:pointer;">Tech links</div>
    </div>  <div class="col-1"></div>
    <div class="col">
      <div class="p-3" onclick="location.href='<?= base_url().'Welcome/Quiz'?>';" style="cursor:pointer;">Quiz</div>
    </div> <div class="col-1"></div>
  </div>
</div>

<div style="background:black;height:500px;width:100%">
       <div style="position:absolute;bottom:200px;width:100%">
  <label style="color:white;font-size:80px"><b><i>Get2Logics</i></b></label>

  <div id="carouselExampleIndicators" class="carousel slide">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
    <h4 style="color:white;font-size:15px"><i>Enhance your learning and build a strong base.Maintain 
      a go-getter attitude in your work field and work with a sharp intellect to excel in your career 
    field.</i></h4>
    </div>
    <div class="carousel-item">
    <h4 style="color:white;font-size:15px"><i>Our website provides contents specific to web-app area and mobile app content too.</i></h4>
    </div>
    <div class="carousel-item">
    <h4 style="color:white;font-size:15px"><i>I have cover various articles related to programming languages which are in high demand now a days.</i></h4>
    </div>
    <div class="carousel-item">
    <h4 style="color:white;font-size:15px"><i>Develop a progressive nature in your daily work life and excel in the field you are making effort.</i></h4>
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
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" 
    aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
</div>
</div>
<div style="position:absolute;bottom:0px;width:100%">
<label style="color:white;padding-right:50px;">Follow us on :</label>
<a href="https://github.com/PRIYANKA-Nigam" ><img src="github.png" alt="Github" width="65px" height="65px"></a>
<a href="https://hackerrank.com/ec_1634831038"> <img src="hack.jpg" alt="Hackerrank" width="65px" height="65px"></a>
<a href="https://twitter.com/PriyankaN2504"><img src="twitter.jpg" alt="twitter" width="65px" height="65px"></a>
<a href="https://instagram.com/nigampriyanka042"><img src="insta.jpg" alt="Instagram" width="65px" height="65px"></a>
<a href="https://linkedin.com/in/priyanka-nigam-083247172"><img src="linked.png" alt="Linkedin" width="65px" height="65px"></a>
<a href="https://facebook.com/priyanka.nigam.9256"><img src="fb.jpg" alt="Facebook" width="65px" height="65px"></a>
</div>
</div>
<hr>
<h1><center>High Demand Tech domain</center></h1>
<br>
<div class="container text-center">
  <div class="row g-2">
    <div class="col-5" >
      <div class="p-3" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample" >
      <h1 style="color:white;"><center>AI/ML/Robotics/Data Science</center></h1></div> 
      <div style="min-height: 220px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 600px;">
      This is a biggest stream and a future of world.The more you excel in this field the more you grow.The core languages to 
      make career in these fiels are - Python,Java,C++,R, etc. The most popular language for data science is Python.
      Java is also highly scalable for AI/ML data science algorithm.Many big data framework Hadoop,Hive and Spark
      (are also java based) used in ML.Since JVM allows users to create machine learning tools fast and roll them out at speed.
    </div>
  </div>
</div>
    </div>

    <div class="col-5 offset-2">
      <div class="p-3" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample">
      <h1 style="color:white;"><center>Microservices</center></h1>
      <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 600px;">
     It is an architecture an style of  building rapid web based applications. Now a days , it is adopted by industries 
     to build large scale applications that have high customer influx in their sites.Popular language for microservices 
     Development is Java & spring. But many other languages can also be used in such Development like - Python,Golang,Node JS,
     .Net. Microservice style fragment our applications into a series of smaller services , each executing in its own 
     process and interacting with light weight mechanism.
    </div>
  </div>
</div>
    </div> 
    </div>
    <div class="col-5" style="margin-top:100px">
      <div class="p-5" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample">
      <h1 style="color:white;"><center>Android/IOS Development</center></h1>
      <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 400px;">
     There is always a craze in mobile app development. Their are various softwares in market to construct your app in 
     no time and put them in production.Java is widely used well known programming language for android and IOS App development.
     If you are looking for IOS app than Objective-C , Swift could be your best bet.For android Development, Java can be use.However 
     Kotlin is also a preferred language .It is statically typed language used by over 60% of professionals.

    </div>
  </div>
</div>
    </div> 
    </div>
    <div class="col-5 offset-2" style="margin-top:100px">
      <div class="p-3" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample">
      <h1 style="color:white;"><center>DevOps Engineering</center></h1>
      <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 500px;">
   This is also a high paying job field and is good for the users who have less coding background.Here the DevOps 
   engineer works with the development team to tackle the necessary coding and scripting to connect various 
   applications elements, such as APIs,libraries and softaware development Kits(SDKs) and integrate other components 
   such as SQL data management or messaging tools that devOps team needs to run the applications.To have growth in
   this field you need to know concepts like - VM,containers,Docker,Kubernetes,Microservices.CI/CD tools like- jenkins,
   Splunk,Sonar Qube and also must have a little background on cloud computing.And thorough knowledge in any of the one cloud
   azure,aws,gcp
    </div>
  </div>
</div>
    </div> 
    </div>
  </div>
</div>

<!-- <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Popover title" 
    data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button> -->

    <br><br><br>
    <hr>

    </body>
</html>
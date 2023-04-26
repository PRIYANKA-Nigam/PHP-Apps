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
          /*  */
          html {
width: 100%;
height: 100%;
position: relative;
}
body {
width: 100%;
height: 100%;
position: relative;
background-color: var(--primary-color);
}
          .belowdiv{
            height: 75%;
            border-style: solid;
            border-width: 1px;
          }
.col{
    background: blueviolet;
    /* background: var(--secondary-color); */
    margin:4px ;
}
.col-1{
    background: black;
    /* background: var(--secondary-color); */
    margin:0px ;
}


.col-3{
  background: blueviolet;
 margin-left: 20px;
 margin-top: 10px;
  width: 260px;
  height: 100px;
}
.col-5{
  background: blueviolet;
 
  width: 400px;
  height: 160px;
}
.wrapper{
  margin-left:15px ;
}
.gtl{
  background: var(--secondary-color);
}
#icon{
  width: 30px;
  cursor: pointer;
}
:root{
  --primary-color:#edf2fc;
  --secondary-color:#212121;
}
.dark-theme{
  --primary-color:yellow;
  --secondary-color:red;
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#links">Links</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#video">Video</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#article">Reference Material</a>
        </li>
      </ul>
    <img src='<?=base_url().'setting.jpg'?>' id="icon">
      <div class="btn btn-outline-success" id="google_element">Choose Language</div>
     
     
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row gx-5" >
    <div class="col">
     <div class="p-3 " onclick="location.href='<?= base_url().'Welcome/Blog'?>'" style="cursor:pointer;">Blogs</div>
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

<div style="background:black;height:500px;width:100%" >
       <div style="position:absolute;bottom:200px;width:100%;" >
  <label style="color:white;font-size:80px;margin-left:350px;" class="gtl"><b><i>Get2Logics</i></b></label>

  <div id="carouselExampleIndicators" class="carousel slide">
  
  <div class="carousel-inner" style="margin-left: 20px;">
    <div class="carousel-item active" >
    <h4 style="color:white;font-size:20px;margin:auto" class="gtl"><i>Enhance your learning and build a strong base.Maintain 
      a go-getter attitude in your work field and work with a sharp intellect to excel in your career 
    field.</i></h4>
    </div>
    <div class="carousel-item">
    <h4 style="color:white;font-size:20px" class="gtl"><i>Our website provides contents specific to web-app area and mobile app content too.</i></h4>
    </div>
    <div class="carousel-item">
    <h4 style="color:white;font-size:20px" class="gtl"><i>I have cover various articles related to programming languages which are in high demand now a days.</i></h4>
    </div>
    <div class="carousel-item">
    <h4 style="color:white;font-size:20px" class="gtl"><i>Develop a progressive nature in your daily work life and excel in the field you are making effort.</i></h4>
    </div>
  </div>
 
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden" >Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="margin-right:60px"></span>
    <span class="visually-hidden" >Next</span>
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
<label style="color:white;padding-right:50px;margin-left:450px" class="gtl">Follow us on :</label>
<div style="margin-left: 350px;" class="gtl">
<a href="https://github.com/PRIYANKA-Nigam" ><img src="<?=base_url().'github.png'?>" alt="Github" width="65px" height="65px"></a>
<a href="https://hackerrank.com/ec_1634831038"> <img src="<?=base_url().'hack.jpg'?>" alt="Hackerrank" width="65px" height="65px"></a>
<a href="https://twitter.com/PriyankaN2504"><img src="<?=base_url().'twitter.jpg'?>" alt="twitter" width="65px" height="65px"></a>
<a href="https://instagram.com/nigampriyanka042"><img src="<?=base_url().'insta.jpg'?>" alt="Instagram" width="65px" height="65px"></a>
<a href="https://linkedin.com/in/priyanka-nigam-083247172"><img src="<?=base_url().'linked.png'?>" alt="Linkedin" width="65px" height="65px"></a>
<a href="https://facebook.com/priyanka.nigam.9256"><img src="<?=base_url().'fb.jpg'?>" alt="Facebook" width="65px" height="65px"></a>
</div>
</div>
</div>
<div style="background-color: black;width:100%;height:auto;margin-top:5px" class="belowdiv">
<a href="https://www.topcoder.com/" ><img src="<?=base_url().'top.png'?>" alt="Top coder" width="220px" height="200px"></a>
<a href="https://leetcode.com/" ><img src="<?=base_url().'leet.png'?>" alt="Leetcode" width="220px" height="200px"></a>
<a href="https://www.codechef.com/" ><img src="<?=base_url().'code.png'?>" alt="Codechef" width="220px" height="200px"></a>
<a href="https://hackerrank.com/" ><img src="<?=base_url().'hackerrank.png'?>" alt="Hackerrank" width="220px" height="200px"></a>
<a href="https://www.hackerearth.com/" ><img src="<?=base_url().'hackerearth.png'?>" alt="Hackerearth" width="220px" height="200px"></a>
</div><br><br><br>
<hr>
<section id="article">
<div class="card-header py-3" >
                                    <h2 class="m-0 font-weight-bold text-primary">Tech Article</h2> 
                                </div>
<div style="background-color: black;width:100%;height:auto;margin-top:5px">
<a href="<?= base_url().'Blog/Java'?>" ><img src="<?=base_url().'java.png'?>" alt="Top coder" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/SonarQube'?>" ><img src="<?=base_url().'sonar.jpg'?>" alt="Leetcode" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Spring'?>" ><img src="<?=base_url().'spring.png'?>" alt="Codechef" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Git'?>" ><img src="<?=base_url().'git.png'?>" alt="Hackerrank" width="270px" height="100px"></a>

</div><br>

<div style="background-color: black;width:100%;height:auto;margin-top:5px">
<a href="<?= base_url().'Blog/Azure'?>" ><img src="<?=base_url().'azure.jpg'?>" alt="Top coder" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/PHP'?>" ><img src="<?=base_url().'phppro.png'?>" alt="Leetcode" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Jenkins'?>" ><img src="<?=base_url().'jenkinsPro.png'?>" alt="Codechef" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Spinnaker'?>" ><img src="<?=base_url().'spinnaker.png'?>" alt="Hackerrank" width="270px" height="100px"></a>

</div><br>

<div style="background-color: black;width:100%;height:auto;margin-top:5px">
<a href="<?= base_url().'Blog/DevOps'?>" ><img src="<?=base_url().'devOps.png'?>" alt="Top coder" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Kafka'?>" ><img src="<?=base_url().'kafka.png'?>" alt="Leetcode" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Maven'?>" ><img src="<?=base_url().'maven.jpg'?>" alt="Codechef" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Api'?>" ><img src="<?=base_url().'api.png'?>" alt="Hackerrank" width="270px" height="100px"></a>

</div><br>

<div style="background-color: black;width:100%;height:auto;margin-top:5px">
<a href="<?= base_url().'Blog/Jar'?>" ><img src="<?=base_url().'jar.png'?>" alt="Top coder" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/JDBC'?>" ><img src="<?=base_url().'jdbc.jpg'?>" alt="Hackerearth" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Microservice'?>" ><img src="<?=base_url().'microservice.png'?>" alt="Hackerearth" width="270px" height="100px"></a>
<a href="<?= base_url().'Blog/Jira'?>" ><img src="<?=base_url().'jira.png'?>" alt="Hackerearth" width="270px" height="100px"></a>
</div><br>
</section>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
                                <div class="row">
                              
                                <div class="col-3" >
      <div class="p-5" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample" >
      <h6 style="color:white;" class="gtl"><center>AI/ML/Robotics/Data Science</center></h6></div> 
      <div style="min-height: 220px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body " style="width: 250px;">
    Data Science is a broader field, but all are part of the AI family.Data scientists who work in AI and robotics 
    R&D aren't just building better machines, they're also building better data science
    <a href="<?=base_url() ?>Welcome/techDomain/ai" >Know More</a>
    </div>
  </div>
</div>
    </div>
    <div class="col-3" >
      <div class="p-5" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample" >
      <h6 style="color:white;" class="gtl"><center>Microservices</center></h6></div> 
      <div style="min-height: 220px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body " style="width: 250px;">
    Microservices are an architectural and organizational approach to software development where software is 
    composed of small independent services that communicate over well-defined APIs. 
    <a href="<?=base_url() ?>Welcome/techDomain/mi" >Know More</a>
    </div>
  </div>
</div>
    </div>
    <div class="col-3" >
      <div class="p-5" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample" >
      <h6 style="color:white;" class="gtl"><center>Android/IOS Development</center></h6></div> 
      <div style="min-height: 220px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body " style="width: 250px;">
    Apple iOS developers use Swift, Apple's standard programming language, which typically requires less code and is considered easier to use. 
    Android platform developers use Java and Kotlin, which are typically more time-consuming and cumbersome.
    <a href="<?=base_url() ?>Welcome/techDomain/an" >Know More</a>
    </div>
  </div>
</div>
    </div>
    <div class="col-3" >
      <div class="p-5" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
     aria-expanded="false" aria-controls="collapseWidthExample" >
      <h6 style="color:white;" class="gtl"><center>DevOps Engineer</center></h6></div> 
      <div style="min-height: 220px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body " style="width: 250px;">
    A DevOps engineer is an IT professional who works with software developers, 
    system operators (SysOps) and other production IT staff to oversee code releases .
      <a href="<?=base_url() ?>Welcome/techDomain/de" >Know More</a>
    </div>
  </div>
</div>
    </div>
                                </div></div>

    <br><br><br>
    <hr>
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
    <script> 
     var icon=document.getElementById("icon");
     icon.onclick =function(){
      document.body.classList.toggle("dark-theme");
      if(document.body.classList.contains("dark-theme")){
        icon.src="<?=base_url().'setting.jpg'?>";
      }else{
        icon.src="<?=base_url().'moon.jpg'?>";
      }
     }
     </script>                 
    </body>
</html>
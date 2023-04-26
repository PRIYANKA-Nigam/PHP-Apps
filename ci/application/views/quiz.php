
<html>
<head>
        <meta charset="utf-8">
        <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style>
#icon{
  width: 30px;
  cursor: pointer;
}
:root{
  --primary-color:#edf2fc;
  --secondary-color:white;
}
.dark-theme{
  --primary-color:yellow;
  --secondary-color:red;
}
.g{
  background: var(--primary-color);
}
.gtl{
  background: var(--secondary-color);
}
body{
  background: var(--primary-color);
  max-height: 100vh; 
  /* by giving max-height: 100vh the footer got stick to the bottom of the page */
}
      </style>
        </head>
    <body class="g" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>

<div id="container">
<div id="google_element" style="float:right"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
             <img src='<?=base_url().'setting.jpg'?>' id="icon" width="25px" height="25px" >
<a href="<?=base_url().'Welcome/'?>" ><button class="btn btn-success" style="float:right;margin-right:10px;margin-top:15px">BACK</button></a>
	<h1>Welcome to Quiz!</h1>
<div style="background-color: black;border-radius:30%;width:800px;height:300px;margin-top:50px;margin-left:70px">
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/quiz" class="btn btn-danger" style="margin-left:100px;margin-top:50px;width:120px;height:60px">Android</a>
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/cquiz" class="btn btn-primary" style="margin-top:50px;width:120px;height:60px">C Programming</a>

<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/container" class="btn btn-warning" style="margin-top:50px;width:120px;height:60px">Container/VM</a>
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/cplusplus" class="btn btn-info" style="margin-top:50px;width:120px;height:60px">C++</a>

<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/docker" class="btn btn-dark" style="margin-top:50px;width:120px;height:60px">Docker</a><br>
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/git" class="btn btn-success" style="margin-left:100px;margin-top:5px;width:120px;height:60px">Git</a>

<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/java" class="btn btn-danger" style="margin-top:5px;width:120px;height:60px" >Java</a>
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/jdbc" class="btn btn-primary" style="margin-top:5px;width:120px;height:60px">JDBC</a>

<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/jenkins" class="btn btn-warning" style="margin-top:5px;width:120px;height:60px">Jenkins</a>
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/kubernetes" class="btn btn-info" style="margin-top:5px;width:120px;height:60px">Kubernetes</a><br>

<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/microservice" class="btn btn-dark" style="margin-left:100px;margin-top:5px;width:120px;height:60px">Microservice</a>
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/php" class="btn btn-success" style="margin-top:5px;width:120px;height:60px">PHP</a>

<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/rest" class="btn btn-danger" style="margin-top:5px;width:120px;height:60px">Rest API</a>
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/spring" class="btn btn-primary" style="margin-top:5px;width:120px;height:60px">Spring</a>
<a href="<?php echo base_url(); ?>Welcome/Quizdisplay/azure" class="btn btn-warning" style="margin-top:5px;width:120px;height:60px">Azure</a><br>
</div>



</div>
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
      <div style="margin-top: 300px;">
<?php 
        include('footer.php');
        ?> 
</div> 
</body>
  
</html>

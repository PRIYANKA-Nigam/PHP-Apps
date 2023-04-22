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
}
          .belowdiv{
            height: 75%;
            border-style: solid;
            border-width: 1px;
          }
.col{
    background: blueviolet;
    margin:4px ;
}
.col-1{
    background: black;
    width:0.1px;
}
.col-5{
  background: blueviolet;
  width: 400px;
  height: 160px;
}
.wrapper{
  margin-left:15px ;
}
nav{
  position: fixed;
}
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
}
</style>
    </head>
    <body  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>

    <!-- Navigation bar -->
    <!-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" >
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url().'Welcome'?>" style="color:black">Get2Logics</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <img src='<?=base_url().'setting.jpg'?>' id="icon" width="25px" height="25px" style="float:right">
      <div class="btn btn-outline-success" id="google_element" style="float:right">Choose Language</div>
     
    </div>
  </div>
</nav>
    <!-- </header> -->
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
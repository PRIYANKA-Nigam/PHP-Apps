<!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2023</span>
            </div>
        </div>
    </footer> -->
    <!-- <!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>PHP Blogs</title>
   
<script src="https://code.jquery.com/jquery-3.6.3.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel = "stylesheet" href  = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style3.css');    ?>"> -->
<style>
@import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);

body {
    font-family: 'Alegreya Sans', sans-serif;
}

/* Sticky footer position and size
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 300px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 300px;
}

/* Taller footer on small screens */
@media (max-width: 34em) {
    body {
      margin-bottom: 100px;
    }
    .footer {
      height: 300px;
    }
}

/* Sticky footer style and color
-------------------------------------------------- */
footer {
  padding-top: 30px;
  background-color: #292c2f;
  color: #bbb;
}

footer a {
  color: #999;
  text-decoration:none;
}

footer a:hover, footer a:focus {
  color: #aaa;
  text-decoration:none;
  border-bottom:1px dotted #999;
}

footer .form-control {
    background-color: #1f2022;
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
    border: none;
    resize: none;
    color: #d1d2d2;
    padding: 0.7em 1em;
}

</style>
  
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
   
    <footer class="bg-light text-center text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5 style="color:#1f2022"><i class="fa fa-road"></i> <b>Site Links</b></h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li style="background:black"><a href="">Contact:</a></li>
                            <li><a href="">9129520224 </a></li>
                            <li style="background:black"><a href="">Mail To: </a></li>
                            <li><a href="">priyankanigam25041999@gmail.com</a></li>
                            <li style="background:black"><a href="">Hometown : </a></li>
                            <li><a href="">Uttar Pradesh(India)</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Documentation</a></li>
                            <li ><button id="b1" style="background:black;color:white">Support</button></li>
                            <li><a href="<?= base_url().'Welcome'?>">Home</a></li>
                            <li><button id="b2" style="background:black;color:white">About</button></li>
                        </ul>
                    </div>
                </div>
                <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
//   $( function() {
//     $( "#dialog" ).dialog();
//   } );
function myinfo(data){
   alert(data);}
$(document).ready(function() {
    var pos = { my: "center center", at: "center top+80", of: window };
$(function() {
    $( "#dialog" ).dialog({
autoOpen: false,
position:pos,
buttons: {
     "Close ": function() {
      $( this ).dialog( "close" );
      }
    }
});
});
$(function() {
    $( "#adialog" ).dialog({
autoOpen: false,
position:pos,
buttons: {
     "Close ": function() {
      $( this ).dialog( "close" );
      }
    }
});
});
  $("#b1").click(function(){
$( "#dialog" ).dialog( "open" );
})
$("#b2").click(function(){
$( "#adialog" ).dialog( "open" );
})
})
  </script>
</head>
<body>
 
<div id="dialog" title="Our Support & Commitment" style="background:#3b5998;width:600px;height:200px;margin:auto;display:flex;color:white">
  <h4>We love what we do and we do what our clients love & work with great clients all over the world to create thoughtful and purposeful websites.
our website is the center of your digital eco-system, like a brick and mortar location,
 the experience matters once a customer enters, just as much as the perception they have of you before they walk through the door.
If you are designing a website and want more visitors, we recommend that you continue to explore tips that you can use when creating
a website. If you have any tips for writing website content for your website or other types of content, 
please feel free to share them with us.</h4>
</div>
<div id="adialog" title="About Me" style="background:black;width:600px;height:200px;margin:auto;display:flex;color:white">
  <h4>Hi , Thank you for visiting my site . My name is Priyanka Nigam .I'm an android amd web developer.I love to make new apps.I have
    also given my contribution in other sites like - github . You can check my account on Github/Gitlab and also other social profiles and 
please do follow me as well.If you have any query you can contact me at my mentioned emailId and mobile number.I would love to assist you.
I have added blogs and helpful links of my self made apps for you as a reference.Most of the articles i covered in my blog are from my
self made notes which will give you a clear insights over the subject.Share my website url with your friends and collegues that would be a
great help in promoting my site and it will also encourage me to post good content for you all regularly. </h4>
</div>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right" style="color:#1f2022"><b>Contact Us :</b></h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-success btn-lg" 
                        value="Thankyou for reaching out to us.We'll contact you" onclick="myinfo(this.value)">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://facebook.com/priyanka.nigam.9256"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="https://twitter.com/PriyankaN2504"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="https://google.com/"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://instagram.com/nigampriyanka042"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="https://linkedin.com/in/priyanka-nigam-083247172"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="https://github.com/PRIYANKA-Nigam"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="#">Get2Logics</a>
  </div>
  <!-- Copyright -->
</footer>

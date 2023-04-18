<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>PHP Blogs</title>
   
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel = "stylesheet" href  = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style3.css');    ?>">
  
    <link href="sign-in.css" rel="stylesheet">
    <style>
       .container{
    background: rgba(255, 255  , 255, 0.1);
    backdrop-filter: blur(15px);
    width: 400px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    /* overflow-y: auto; */
    transition: 0.6s ease;
    transition-property: left;
}
.container #sidebarMenu{
    width: 100%;
    margin-top: 20px;
}
      label{
    text-align: center;
    position: fixed;
    top: 0;
    left: 35%;
    font-size: 50px;
    /* top:10%; */
    color: white;
}
section{
    height: 100vh;
    width: 170vh;
    display: inline-flexbox;
    align-items: left;
    margin-top: 35px;
    margin-left: 280px;
    padding-left: 210px;
    padding-top: 50px;
    justify-content: center;
    text-transform: uppercase;
}
#p1{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p2{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p3{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p4{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p5{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}


  </style>
  </head>
  <body class="text-center">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
   

    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Home</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" 
  aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </div>
  </div>
</header>
<!-- <div class="sidenav"> -->
<div class="container">
  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="side-bar" >
    <div class="menu">
      <div class="position-sticky pt-3 sidebar-sticky">
      <div id="wrapper">
        <ul class="nav flex-column navbar-nav bg-gradient-primary  sidebar-dark accordion" 
        id="accordionSidebar" style="background:brown">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                </div>
              <span data-feather="home" class="align-text-bottom">
           PHP</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#p1">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
           <h4><b> What is PHP.</b></h4>
            </a>
          </li>
          <li>
          <div class="item">
             <a class="sub-btn" href="#p2"><i class="fas fa-info-circle"></i>Datatypes in PHP<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#p2" class="sub-item"><i class="far fa-star"></i>Boolean</a>
                <a href="#p3" class="sub-item"><i class="far fa-star"></i>Float</a>
                <a href="#p4" class="sub-item"><i class="far fa-star"></i>Integer</a>
                <a href="#p5" class="sub-item"><i class="far fa-star"></i>String</a>
                <a href="#p6" class="sub-item"><i class="far fa-star"></i>Array</a>
            </div>
            </div>
          </li>
        
  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#p7">  <h4><b>PHP Arrays</b></h4></a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#p7"><i class="far fa-star"></i>Indexed Arrays</a>
                <a class="dropdown-item" href="#p8"><i class="far fa-star"></i>Associative Arrays</a>
                <a class="dropdown-item" href="#p9"><i class="far fa-star"></i>Multidimensional Arrays</a>
            </div> 
        </div></div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p10">
              <span data-feather="file" class="align-text-bottom"></span>
              <h4><b>faster in PHP & HTML.</b></h4>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p11">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <h4><b>PHP a scripting language</b></h4>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="#p12">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <h4><b>PHP Applications</b></h4>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="#p13">
              <span data-feather="file" class="align-text-bottom"></span>
              <h4><b>Xampp Server</b></h4>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p14">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <h4><b>Variable Conventions</b></h4>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p15">
              <span data-feather="file" class="align-text-bottom"></span>
              <h4><b>Single Quotes Vs Double Quotes</b></h4>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="#p16">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <h4><b>PHP Logical operator</b></h4>
            </a>
          </li>
          <li class="nav-item">
  <hr class="sidebar-divider">
  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#p17">  <h4><b>Printing ways in PHP</b></h4></a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#p17"><i class="far fa-star"></i>print</a>
                <a class="dropdown-item" href="#p18"><i class="far fa-star"></i>echo</a>
                <a class="dropdown-item" href="#p19"><i class="far fa-star"></i>print_r()</a>
                <a class="dropdown-item" href="#p20"><i class="far fa-star"></i>var_dump()</a>
            </div> 
        </div></div>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p21">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <h4><b>== vs ===operator</b></h4>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p22">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <h4><b>PHP Functions</b></h4>
            </a>
          </li>
          <li class="nav-item">
         
          <div class="item">
             <a class="sub-btn" href="#p23"><i class="fas fa-info-circle"></i>PHP Array Function<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#p23" class="sub-item"><i class="far fa-star"></i> array_pop($arr)</a>
                <a href="#p24" class="sub-item"><i class="far fa-star"></i>array_push($arr,$val)</a>
                <a href="#p25" class="sub-item"><i class="far fa-star"></i> array_shift($arr)</a>
                <a href="#p26" class="sub-item"><i class="far fa-star"></i>array_unshift($arr,$val)</a>
            </div>
            </div>
          </li>
         
          <li class="nav-item">

  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#p27">  <h4><b>Ways of including 1 PHP file</b></h4></a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#p27"><i class="far fa-star"></i>include</a>
                <a class="dropdown-item" href="#p28"><i class="far fa-star"></i>require</a>
                <a class="dropdown-item" href="#p29"><i class="far fa-star"></i>include_once</a>
                <a class="dropdown-item" href="#p30"><i class="far fa-star"></i>require_once</a>
            </div> 
        </div></div>
          </li>
          <li class="nav-item">

  <div style="margin:auto">
            <div class="dropdown open">
                <p class="border-none outline-none "  id="triggerId"
                data-aria-expanded="true">
                <span class="d-none d-sm-inline"><a class="dropdown-item" href="#p31">  <h4><b> In-built function in PHP</b></h4></a></span></p>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a class="dropdown-item" href="#p31"><i class="far fa-star"></i>explode()</a>
                <a class="dropdown-item" href="#p32"><i class="far fa-star"></i>implode()</a>
                <a class="dropdown-item" href="#p33"><i class="far fa-star"></i>strlen()</a>
                <a class="dropdown-item" href="#p34"><i class="far fa-star"></i>str_word_count()</a>
                <a class="dropdown-item" href="#p35"><i class="far fa-star"></i>pow()</a>
                <a class="dropdown-item" href="#p36"><i class="far fa-star"></i>rand()</a>
                <a class="dropdown-item" href="#p37"><i class="far fa-star"></i>str_replace()</a>
                <a class="dropdown-item" href="#p38"><i class="far fa-star"></i>sort()</a>
                <a class="dropdown-item" href="#p39"><i class="far fa-star"></i>array_merge()</a>
                <a class="dropdown-item" href="#p40"><i class="far fa-star"></i>array_unique()</a>
                <a class="dropdown-item" href="#p41"><i class="far fa-star"></i>count()</a>
            </div> 
        </div></div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#p42">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <h4><b>How to make Database connection in PHP.</b></h4>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p43">
              <span data-feather="file" class="align-text-bottom"></span>
              <h4><b> MySQLi Vs PDO</b></h4>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p44">
              <span data-feather="file" class="align-text-bottom"></span>
              <h4><b> Session in PHP</b></h4>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="#p45">
              <span data-feather="file" class="align-text-bottom"></span>
              <h4><b> header in PHP</b></h4>
            </a>
          </li>
        </ul>

       
      </div>
      </div>
    </nav>
    </div></div>
    <label style="margin-top:35px"><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br>
<div class="content" >
    <section id="p1" >
<h1>i clicked for s1.u also tap for it.</h1>
What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 
1500s, when an unknown printer took a galley of type and scrambled it to 
make a type specimen book. 
It has survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in the 
1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker 
including versions of Lorem Ipsum.

"But I must explain to you how all this mistaken idea of denouncing 
pleasure and praising pain was born and I will give you a complete 
account of the system, and expound the actual teachings of the great 
explorer of the truth, the master-builder of human happiness. No one 
rejects, dislikes, or avoids pleasure itself, because it is pleasure, 
but because those who do not know how to pursue pleasure rationally 
encounter consequences that are extremely painful. Nor again is there 
anyone who loves or pursues or desires to obtain pain of itself, 
because it is pain, but because occasionally circumstances occur in 
which toil and pain can procure him some great pleasure. To take a 
trivial example, which of us ever undertakes laborious physical exercise, 
except to obtain some advantage from it? But who has any right to find 
fault with a man who chooses to enjoy a pleasure that has no annoying 
consequences, or one who avoids a pain that produces no resultant pleasure?"
    </section>
    <section id="p2">
<h1>i clicked for s2</h1>
It is a long established fact that a reader will be distracted by the 
readable content of a page when looking at its layout. The point of 
using Lorem Ipsum is that it has a more-or-less normal distribution of 
letters, as opposed to using 'Content here, content here', making it 
look like readable English. Many desktop publishing packages and web 
page editors now use Lorem Ipsum as their default model text, and a 
search for 'lorem ipsum' will uncover many web sites still in their 
infancy. Various versions have evolved over the years, sometimes by 
accident, sometimes on purpose (injected humour and the like).
    </section>
    <section id="p3">
<h1>i clicked for s3</h1>
Where can I get some?
There are many variations of passages of Lorem Ipsum available, 
but the majority have suffered alteration in some form, by injected 
humour, or randomised words which don't look even slightly believable. 
If you are going to use a passage of Lorem Ipsum, you need to be sure 
there isn't anything embarrassing hidden in the middle of text. All 
the Lorem Ipsum generators on the Internet tend to repeat predefined 
chunks as necessary, making this the first true generator on the Internet. 
It uses a dictionary of over 200 Latin words, combined with a handful of 
model sentence structures, to generate Lorem Ipsum which looks reasonable. 
The generated Lorem Ipsum is therefore always free from repetition, 
injected humour, or non-characteristic words etc.
    </section>
    <section id="p4">
<h1>i clicked for s4</h1>
The standard Lorem Ipsum passage, used since the 1500s
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
culpa qui officia deserunt mollit anim id est laborum."
    </section>
    <section id="p5">
<h1>i clicked for s5</h1>
"At vero eos et accusamus et iusto odio dignissimos ducimus qui 
blanditiis praesentium voluptatum deleniti atque corrupti quos 
dolores et quas molestias excepturi sint occaecati cupiditate 
non provident, similique sunt in culpa qui officia deserunt 
mollitia animi, id est laborum et dolorum fuga. Et harum quidem 
rerum facilis est et expedita distinctio. Nam libero tempore, 
cum soluta nobis est eligendi optio cumque nihil impedit quo 
minus id quod maxime placeat facere possimus, omnis voluptas 
assumenda est, omnis dolor repellendus. Temporibus autem quibusdam 
et aut officiis debitis aut rerum necessitatibus saepe eveniet ut 
et voluptates repudiandae sint et molestiae non recusandae. Itaque 
earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
voluptatibus maiores alias consequatur aut perferendis doloribus 
asperiores repellat."
    </section>
   </div>
<script type="text/javascript">
$(document).ready(function(){
$('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});

});

</script>
  </body>
</html>
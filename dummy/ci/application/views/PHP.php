
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
    height: auto;
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
#p6{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p7{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p8{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p9{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p10{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#p11{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p12{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p13{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p14{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p15{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#p16{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p17{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p18{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p19{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p20{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#p21{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p22{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p23{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p24{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p25{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#p26{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p27{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p28{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p29{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p30{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#p31{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p32{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p33{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p34{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p35{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#p36{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p37{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p38{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p39{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p40{
    background: linear-gradient(-50deg,crimson 40%,yellow 0%);
}
#p41{
    background: linear-gradient(-50deg,white 40%,yellow 40%);
}
#p42{
    background: linear-gradient(-50deg,lightblue 40%,yellow 0%);
}
#p43{
    background: linear-gradient(-45deg,lightgreen 40%,yellow 0%);
}
#p44{
    background: linear-gradient(-45deg,purple 40%,yellow 0%);
}
#p45{
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
    <div id="google_element" style="float:right"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
    <label style="margin-top:35px"><b><a href="<?=base_url().'Welcome/Blog'?>" ><button class="btn btn-success" >Back</button></a></b></label><br>
<div class="content" >
    <section id="p1" style="height: auto;">
<h1>What is PHP.</h1>
PHP (Hypertext Preprocessor) is known as a general-purpose scripting language that can be 
used to develop dynamic and interactive websites. It was among the first server-side 
languages that could be embedded into HTML, making it easier to add functionality to 
web pages without needing to call external files for data.<br>
<b>Pros</b> <br>
It’s open source (and therefore free!)<br>
It’s versatile: One of the major benefits of PHP 
is that it is platform independent, meaning it can 
be used on Mac OS, Windows, Linux and supports most 
web browsers. It also supports all the major web servers, 
making it easy to deploy on different systems and 
platforms at minimal additional cost.<br>
It’s fast and secure: Two things that every organization wants their website or application 
to be are fast and secure. PHP uses its own memory and competes well on speed<br>
It is well connected with databases: PHP makes it easy to connect securely with almost any 
kind of database. This gives developers more freedom when choosing which database is best 
suited for the application being built.<br>
<b>PHP Vs Other</b><br>
<b>JavaScript: </b> This remains the most popular programming language of them all, and has been around for almost as long as PHP. <br>
JavaScript is primarily a client-side language, and therefore not directly comparable with PHP, though the 
rise of Node.js and other frameworks enables developers to write server-side scripts with JavaScript.<br>
but On the other hand, PHP is easier to learn and maintain, so using it could mean lower development costs. <br>
<b>Python: </b> is one of the most popular languages around today, loved for its simplicity and flexibility. 
It has emerged as the number one choice for data science and AI, though still trails far behind 
PHP in use for web development.it is flexible, though does not yet provide the same level of database 
connectivity and support as PHP.<br>
<b>Ruby:</b> Ruby is another open-source language that has been around since the 90s, and is used in the 
popular web development framework ‘Ruby on Rails’. It is praised for its elegant syntax and robust 
performance, though it is considered more complicated to learn than PHP and doesn’t have the same 
extensive community support. <br>

    </section>
    <section id="p2">
<h1>Datatypes in PHP</h1><br>
String.<br>
Integer.<br>
Float (floating point numbers - also called double)<br>
Boolean.<br>
Array.<br>
Object.<br>
NULL.<br>
Resource.<br>
<br>
<b>Boolean :</b> A Boolean represents two possible states: TRUE or FALSE.<br>

$x = true;<br>
$y = false;<br>
    </section>
    <section id="p3">
<h1>Float</h1>
A float (floating point number) is a number with a decimal point or a number in exponential form.
In the following example $x is a float. The PHP var_dump() function returns the data type and value:<br>
?php<br>
$x = 10.365;<br>
var_dump($x);<br>
?><br>
    </section>
    <section id="p4">
<h1>Integer</h1>
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.<br>
Rules for integers:<br>
An integer must have at least one digit<br>
An integer must not have a decimal point<br>
An integer can be either positive or negative<br>
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation.<br>

    <section id="p5">
<h1>String</h1>
A string is a sequence of characters, like "Hello world!".
A string can be any text inside quotes. You can use single or double quotes:<br>
?php <br>
$x = "Hello world!";<br>
$y = 'Hello world!';<br>

echo $x;<br>
echo "<br>";<br>
echo $y;<br>
?><br>
    </section>
    <section id="p6" >
<h1>Array</h1><br>
An array stores multiple values in one single variable.<br>
?php <br>
$cars = array("Volvo","BMW","Toyota");<br>
var_dump($cars);<br>
?><br>
    </section>
    <section id="p7">
<h1>PHP Arrays</h1><br>
The array() function is used to create an array.PHP array() function creates and returns an array. 
It allows you to create indexed, associative and multidimensional arrays.<br>
In PHP, there are three types of arrays:<br>

<b>Indexed arrays - </b> with numeric index<br>
<b>Associative arrays -</b> Arrays with named keys<br>
<b>Multidimensional arrays -</b> Arrays containing one or more arrays<br><<br>
<b>Indexed Arrays</b><br>
Syntax for indexed arrays: <br>
array(value1, value2, value3, etc.)
    </section>
    <section id="p8">
<h1>Associative Arrays</h1>
Syntax for associative arrays: <br>
array(key=>value,key=>value,key=>value,etc.)<br>
<b>Create an associative array named $age:<br>
?php<br>
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");<br>
echo "Peter is " . $age['Peter'] . " years old."; //Peter is 35 years old.<br>
?></b><br>
    </section>
    <section id="p9">
<h1>Multidimensional Arrays</h1>
Create a multidimensional array:<br>
?php <br>
// A two-dimensional array: <br>
$cars=array <br>
  ( <br>
  array("Volvo",100,96), <br>
  array("BMW",60,59), <br>
  array("Toyota",110,100) <br>
  ); <br>
?> <br>
<b>Output :</b><br>
Volvo: Ordered: 100. Sold: 96<br>
BMW: Ordered: 60. Sold: 59<br>
Toyota: Ordered: 110. Sold: 100<br>

    <section id="p10">
<h1>faster in PHP & HTML</h1><br>
On average, pure HTML is executed quicker than PHP. However, 
it won't be that much quicker if there's nothing really 
dynamic with regards to the content you're pulling in.<br>
PHP is better than HTML as it is more powerful in terms of 
its usage. Given below are the differences: PHP is a scripting 
language that can generate dynamic web pages as the code 
execution takes place on the server and the result is returned 
by the server in HTML format which is displayed by the browser.<br>


    </section>
    <section id="p11" >
<h1>PHP a scripting language.</h1><br>
Yes, PHP is a scripting language used mainly for server-side web 
development. Because of its open-source nature, PHP is a 
general-purpose language often used for other projects and graphical user interfaces.<br>
PHP is Scripting language because we can embed php code into HTML. If code of programming 
language can emmbed with other language or integrate with other language or script 
called scipting language. PHP is server side language because php requires server to run a code.<br>

    </section>
    <section id="p12">
<h1>PHP Applications</h1><br>
While PHP is largely used as a scripting language for web-based applications, 
it is also possible to employ it for creating desktop graphical user interface.<br>
PHP scripts can be used on most of the well-known operating systems like 
Linux, Unix, Solaris, Microsoft Windows, MAC OS and many others. It also 
supports most web servers including Apache and IIS. Using PHP affords web 
developers the freedom to choose their operating system and web server.<br>



    </section>
    <section id="p13">
<h1>Xampp Server</h1><br>
XAMPP is an abbreviation for cross-platform, Apache, MySQL, PHP and Perl, and it allows 
you to build WordPress site offline, on a local web server on your computer. <br>
Apache , tomcat r web servers.Mysql - a database server. <br>
Filezilla  to transfer files from 1 host to another host.<br>
Xampp is a platform to provide us the access of  apache web server locally . There r also other 
platform like Xampp eg... Wamp,Mamp,Lamp but xampp is very popular as it can be seamlessly use 
with windows, mac,linux etc . without any extra configuration.<br>
Apache here is used for php.we 1st start the apache than for db we start mysql. 
Apache web server is open source written in C.<br>
<b>Mysql connection through Xampp -></b><br>
Open your XAMPP Control Panel and click on the “Admin” button of the MySQL section, 
which will lead you to the phpMyADmin page.<br>
Alternatively, you can reach this page by typing http://localhost/phpmyadmin/<br>

Localhost - 127.0.0.1 -> Loop back address<br>
localhost is a hostname that refers to the current device used to access it. Localhost is an 
alias used to refer to IP addresses reserved for loopback. <br>
PhpMyAdmin - tool written in php used to handle the administration of mysql over the web.<br>
htdocs - is a static directory of our web server eg...apache server<br>

    </section>
    <section id="p14">
<h1>Variable Conventions</h1><br>
Rules for PHP variables:<br>
A variable starts with the $ sign, followed by the name of the variable.<br>
A variable name must start with a letter or the underscore character.<br>
A variable name cannot start with a number.<br>
The names of your variables cannot contain special characters such as & , % , # , or @ .<br>
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )<br>

    <section id="p15">
<h1>Single Quotes Vs Double Quotes</h1><br>
<b>Single or double quotes</b> in PHP programming are used to define a string. But, there are lots 
of differences between these two. <br>
<b>Single-quoted Strings:</b> It is the easiest way to define a 
string. You can use it when you want the string to be exactly as it is written. All the escape 
sequences like \r or \n, will be output as specified instead of having any special meaning. <br>
Single-quote is usually faster in some cases. The special case is that if you to display a 
literal single-quote, escape it with a backslash (\) and if you want to display a backslash, 
you can escape it with another backslash (\\).<br>
<b>Double-quoted strings:</b> By using Double quotes the PHP code is forced to evaluate the whole 
string. The main difference between double quotes and single quotes is that by using double 
quotes, you can include variables directly within the string. It interprets the Escape sequences. 
Each variable will be replaced by its value. <br>

    </section>
    <section id="p16" >
<h1>PHP Logical operator</h1><br>
Logical operators perform logical operations on TRUE and FALSE. Values used with a 
logical operator are converted into booleans prior to being evaluated. For numerical 
values, zero will be interpreted as FALSE, and other values will be TRUE. Empty 
strings are considered be FALSE, and any nonempty string is TRUE<br>
PHP divides the operators in the following groups:<br>

Arithmetic operators<br>
Assignment operators<br>
Comparison operators<br>
Increment/Decrement operators<br>
Logical operators<br>
String operators<br>
Array operators<br>
Conditional assignment operators<br>

    </section>
    <section id="p17">
<h1>Printing ways in PHP</h1><br>
The basic functions for displaying output in PHP are as follows:<br>
Print() Function.<br>
Echo() Function.<br>
Printf() Function.<br>
Sprintf() Function.<br>
Var_dump() Function.<br>
Print_r() Function.<br>
<br>
<b>print() :</b> Print() Function -
Using this function we can display the outputs in the browser. This function 
returns the Boolean value true. We cannot print the multiple statements using 
this function. The print function plays the same role as the echo function.<br>
<b>print -</b> Unlike echo, print accepts only one argument at a time. The print outputs only the strings. 
It is slow compared to that of echo.<br>
?php<br>
print "Welcome Vineet Kumar Saini !!";<br>
?><br>

Output: Welcome Vineet Kumar Saini !! <br>

    </section>
    <section id="p18">
<h1>echo</h1><br>
The echo() function outputs one or more strings. Using this function we 
can display multiple statements in the browser. The echo() function is 
slightly faster than print(). Because it won't return a value.<br>
<b>echo - </b> no value or returns void. It display the outputs one or more strings separated by commas.<br>
<b>echo has no return value while print has a return value of 1 so it can be used in expressions.</b>
?php<br>
echo "Welcome Vineet Kumar Saini !!";<br>
?><br>

Output:Welcome Vineet Kumar Saini !!<br>
<br>
The <b>printf() function</b> is also used in C, C++. The printf() function outputs 
a formatted string. Using this function we can display the output with the 
help of the formats specified.<br>

?php<br>
$name="Vineet Saini";<br>
$age=24;<br>
printf("The age of %s is %d years.",$name,$age);<br>
?><br>


    </section>
    <section id="p19">
<h1>print_r()</h1><br>
The <b>Print_r()</b> PHP function is used to return an array in a 
human readable form. This function displays the elements of 
an array and properties of an object. The print_r() function 
displays human-readable information about a variable.<br>
<b>print_r - </b> outputs the detailed information about the parameter in a 
format with its type (of an array or an object).Similar to var_dump().<br>
?php<br>
$arr=array ("Vineet","Kumar","Saini");<br>
$arr1=array(10,20,30);<br>
print_r($arr);<br>
print_r($arr1);<br>
?><br>
Output : Array([0]=>Vineet [1]=>Kumar [2]=>Saini)<br>
Array([0]=>10 [1]=>20 [2]=>30)<br>

<br>
The<b> sprintf() </b> writes a formatted string to a variable. This is the same 
as printf, but instead of displaying the output on the web page, it returns that 
output. sprintf() prints the result to a string.<br>
?php <br>
$name="Vineet Saini";<br>
$age=24;<br>
$rv=sprintf ("The age of %s is %d years.",$name, $age);<br>
echo $rv;<br>
?><br>

</section>


    <section id="p20">
<h1>var_dump()</h1><br>
The <b>var_dump()</b> function displays information of a variable that includes its 
type and value. This function displays the variable value along with the variable 
data type. The var_dump() function is used to display structured information 
(type and value) about one or more variables.<br>
<b>print_r() & var_dump - </b> can't return any value it can only dump/print the 
values . The returned value of print_r will be in string format.<br>
?php<br>
$name="Vineet Saini";<br>
$age=24;<br>
var_dump($name);<br>
var_dump($age);<br>
?><br>
Output: string(!2) "Vineet Saini" int(24) <br>
The <b>var_dump()</b> function displays structured information about variables/expressions 
including its type and value. shows in-depth details, by providing additional details of
data type of the value (including the descendant elements)
number of elements in a variable
length of the value<br>
array(5) { [0]=> string(3) "xyz" <br>
 [1]=> bool(false) <br>
[2]=> bool(true) <br>
[3]=> int(100)<br>
[4]=> array(1) { [0]=> string(2) "50" } }<br>

    </section>
    <section id="p21">
<h1>== vs ===operator</h1><br>
The assignment equality = operator only assigns values. The 
equality == does not assign values, but compares them without 
checking their data types. The triple equals sign operator === 
won't do assignment, but will check for equality of values and the 
data type.<br>
The == operator does the type conversion of the operands before 
comparison, whereas the === operator compares the values as well 
as the data types of the operands.<br>
The comparison operator called as the Identical operator is the triple 
equal sign “===”. This operator allows for a much stricter comparison between the given variables 
or values. This operator returns true if both variable contains same 
information and same data types otherwise return false<br>

    </section>
    <section id="p22" >
<h1>PHP Functions</h1><br>
A function is a block of statements that can be used repeatedly in a program.
It will not execute automatically when a page loads.
and it will be executed by a call to the function.<br>
There are 2 types of functions under PHP - <br>
<b>Built-in Function : </b>PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.<br>
Some are like -<br>
Array<br>
Calendar<br>
 Date<br>
 Directory <br>
 Error<br>
 Exception<br>
 Filesystem<br>
 Filter <br>
 FTP <br>
 JSON<br>
  Keywords<br>
Mail <br>
Math <br>
 MySQLi <br>
<b>User-defined Function : </b>Syntax<br>
function functionName() {<br>
  code to be executed;<br>
}<br>

    </section>
    <section id="p23">
<h1>PHP Array Function</h1><br>
These functions allow interacting with and manipulating arrays in various ways. Arrays are essential for 
storing, managing, and operating on sets of variables.<br>

array() - Create an array<br>
array_chunk() - Splits an array into chunks of arrays<br>
array_diff() - Compares array values, and returns the differences<br>
array_fill() - Fills an array with values<br>
array_intersect() - Compares array values, and returns the matches<br>
array_merge() - Merges one or more arrays into one array<br>
<b>array_pop($arr) :</b>array_pop() pops and returns the value of the last element of array , shortening the array by one element.
This function will reset() the array pointer of the input array after use.<br>
Example :<br>
?php<br>
$a=array("red","green","blue");<br>
array_pop($a);<br>
print_r($a);<br>
?><br>
Output : <br>
Array ( [0] => red [1] => green )<br>
    </section>
    <section id="p24">
<h1>array_push($arr,$val)</h1><br>
The array_push() function inserts one or more elements to the end of an array. You can add one value, or as many 
as you like. Note: Even if your array has string keys, your added elements will always have numeric keys .<br>
Example:<br>

$classTenSubjects = array(1=>'Mathematics',2=>'Physics',3=>'Chemistry',4=>'English');<br>
//pushing elements<br>
array_push($classTenSubjects,"Hindi","Yoga");<br>
Output<br>

Array ( [1] => Mathematics [2] => Physics [3] => Chemistry [4] => English [5] => Hindi [6] => Yoga )<br>

    </section>
    <section id="p25">
<h1>array_shift($arr)</h1><br>
The array_shift() function removes the first element from an array, and returns the value of the removed element.
If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1 .<br>
Example :<br>
?php<br>
$a=array(0=>"red",1=>"green",2=>"blue");<br>
echo array_shift($a);<br>
print_r ($a);<br>
?><br>
Output :<br>
red<br>
Array ( [0] => green [1] => blue )<br>

    <section id="p26">
<h1>array_unshift($arr,$val)</h1><br>
The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array. 
You can add one value, or as many as you like. Note: Numeric keys will start at 0 and increase by 1.<br>
Example :<br>
?php<br>
$a=array("a"=>"red","b"=>"green");<br>
array_unshift($a,"blue");<br>
print_r($a);<br>
?><br>

Output :<br>
Array ( [0] => blue [a] => red [b] => green )<br>

    </section>
    <section id="p27">
<h1>Ways of including 1 PHP file</h1><br>
There are two PHP functions which can be used to included one PHP file into another PHP file.<br>
The include() Function.<br>
The require() Function.<br>
<b>include - </b>The include() function takes all the text in a specified file and 
copies it into the file that uses the include function. If there is any problem in 
loading a file then the include() function generates a warning but the script will 
continue execution.<br>
Syntax :   ?php include("menu.php"); ?><br>
The include and require statements are identical, except upon failure: require will produce a 
fatal error (E_COMPILE_ERROR) and stop the script. include will only produce a warning 
(E_WARNING) and the script will continue.<br>
    </section>
    <section id="p28" >
<h1>require</h1><br>
The require() function takes all the text in a specified file and copies it 
into the file that uses the include function. If there is any problem in 
loading a file then the require() function generates a fatal error and halt 
the execution of the script.<br>
So there is no difference in require() and include() except they handle error 
conditions. It is recommended to use the require() function instead of 
include(), because scripts should not continue executing if files are missing 
or misnamed.<br>
Syntax: ?php require("xxmenu.php"); ?><br>
<b>The require_once expression is identical to require except PHP will check if the 
file has already been included, and if so, not include (require) it again.</b>

    </section>
    <section id="p29">
<h1>include_once</h1><br>
The include_once keyword is used to embed PHP code from another file. If the 
file is not found, a warning is shown and the program continues to run. 
If the file was already included previously, this statement will not include it again.<br>
Syntax : ?php include_once 'footer.php';?><br>
The include_once statement includes and evaluates the specified file during the 
execution of the script. This is a behavior similar to the include statement, with 
the only difference being that if the code from a file has already been included, 
it will not be included again, and include_once returns true .<br>


    </section>
    <section id="p30">
<h1>require_once</h1><br>
The require_once keyword is used to embed PHP code from another file. If the 
file is not found, a fatal error is thrown and the program stops. If the file 
was already included previously, this statement will not include it again.<br>
Syntax : ?php require_once 'footer.php';?><br>
require and require_once throw a fatal error if the file is not found, 
whereas include and include_once only show a warning and continue to load the rest of the page.<br>


    </section>
    <section id="p31">
<h1>In-built function in PHP</h1><br>
Built-in functions are ones for which the compiler generates inline code at compile time. 
Every call to a built-in function eliminates a runtime call to the function having the 
same name in the dynamic library.<br>
Built-in functions are the functions that are provided by PHP to make programming more convenient.<br>

<b>explode() :</b>The explode() function breaks a string into an array.but the "separator" parameter cannot be an empty string.<br>
Example :<br>
?php<br>
$str = "Hello world. It's a beautiful day.";<br>
print_r (explode(" ",$str));<br>
?><br>

Output :<br>
Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )<br>

    <section id="p32">
<h1>implode()</h1><br>
Implode in PHP is a function that is used to concatenate all the elements of an 
array together in the same order as they are in the array. And it, in turn, 
returns a new resultant string. This function is the same as the join() function in PHP<br>
Example :<br>
?php<br>
$arr = array('Hello','World!','Beautiful','Day!');<br>
echo implode(" ",$arr);<br>
?><br>

Output : <br>
Hello World! Beautiful Day!<br>
<br>
<b>The explode() function breaks a string into an array, but the implode function returns a string from the elements of an array.</b><br>
    </section>
    <section id="p33">
<h1>strlen()</h1><br>
The strlen() function returns the length of a string.The strlen() is a built-in function in PHP 
which returns the length of a given string. It takes a string as a parameter and returns its 
length. It calculates the length of the string including all the whitespaces and special 
characters. <br>
Syntax:<br>
strlen($string);<br>

    </section>
    <section id="p34" >
<h1>str_word_count()</h1><br>
The str_word_count() function counts the number of words in a string.The str_word_count() 
function is a built-in function in PHP and is used to return information about words used 
in a string like total number word in the string, positions of the words in the string etc.<br>
Syntax :<br>
?php<br>
$mystring = "Twinkle twinkl4e little star";<br>
print_r(str_word_count($mystring));<br>
?><br>

Output : <br>
5<br>

    </section>
    <section id="p35">
<h1>pow()</h1><br>
The pow() is a PHP mathematic function. It raises the first number to the power of the second number.<br>
The pow() function in PHP is used to calculate a base raised to the power of exponent. 
It is a generic function which can be used with number raised to any value.It takes two parameters 
which are the base and exponent and returns the desired answer. If both the arguments passed are 
non-negative integers and the result can be represented as an integer, the result is returned with 
integer type, otherwise, it is returned as a float. <br>
Syntax :<br>
number pow($base, $exp)<br>

    </section>
    <section id="p36">
<h1>rand()</h1><br>
The rand() function generates a random integer.If you want a random integer between 10 and 100 
(inclusive), use rand (10,100).<br>
Example :<br>
?php<br>
echo(rand() . "<br>");<br>
echo(rand() . "<br>");<br>
echo(rand(10,100));<br>
?><br>

Output : <br>
512549293<br>
1132363175<br>
79<br>

    </section>
    <section id="p37">
<h1>str_replace()</h1><br>
The str_replace() function replaces some characters with some other 
characters in a string. This function works by the following rules:<br>
 <b>If the string to be searched is an array, it returns an array. </b><br>
 <b>If the string to be searched is an array, find and replace is performed with every array element.</b><br>

 Example :<br>
 ?php<br>
echo str_replace("world","Peter","Hello world!");<br>
?><br>

Output : <br>
Hello Peter!<br>

    <section id="p38">
<h1>sort()</h1><br>
The sort() function sorts an indexed array in ascending order. 
Use the rsort() function to sort an indexed array in descending order.<br>
Different sorting function :
 <b> sort() - </b> arrays in ascending order<br>
<b>rsort() -</b> sort arrays in descending order<br>
<b>asort() -</b> sort associative arrays in ascending order, according to the value<br>
<b>ksort() - </b> associative arrays in ascending order, according to the key<br>
<b>arsort() -</b> sort associative arrays in descending order, according to the value<br>
<b>krsort() -</b> sort associative arrays in descending order, according to the key<br>

Example : <br>
?php<br>
$cars = array("Volvo", "BMW", "Toyota");<br>
sort($cars);<br>
?><br>

Output :<br>
BMW Toyota Volvo<br>

    </section>
    <section id="p39">
<h1>array_merge()</h1><br>
The array_merge in PHP is a built-in function that combines 
two or more arrays into a single array. This function combines 
the elements or values from two or more arrays into a single array. 
The values of one array are appended to the end of the previous 
array during the merging process.<br>
Example : <br>
?php<br>
$a1=array("red","green");<br>
$a2=array("blue","yellow");<br>
print_r(array_merge($a1,$a2));<br>
?><br>
Output : <br>
red,green,blue ,yellow<br>

    </section>
    <section id="p40" >
<h1>array_unique()</h1><br>
The array_unique() function removes duplicate values 
from an array. If two or more array values are the same, the first 
appearance will be kept and the other will be removed.<br>
Example :<br>
?php<br>
$a=array("a"=>"red","b"=>"green","c"=>"red");<br>
print_r(array_unique($a));<br>
?><br>
Output :<br>
Array ( [a] => red [b] => green )<br>

<b>Avoid array_unique as much as possible and it will speed up your code 
execution. You may use the array_count_values, as it is the fastest 
code, but it is also possible to use other fast alternatives : <br>
foreach with array_keys, or array_flip </b>

    </section>
    <section id="p41">
<h1>count()</h1><br>
The count() function returns the number of elements in an array.<br>
Example :<br>
?php<br>
$cars=array("Volvo","BMW","Toyota");<br>
echo count($cars);<br>
?><br>
Output :<br>
3<br>

    </section>
    <section id="p42" style="height: auto;margin-left:200px">
<h1>How to make Database connection in PHP</h1><br>
<b>Database connection using MySQLi Object-Oriented</b><br>
?php<br>
$servername = "localhost";<br>
$username = "username";<br>
$password = "password";<br>

// Create connection<br>
$conn = new mysqli($servername, $username, $password);<br>

// Check connection<br>
if ($conn->connect_error) {<br>
  die("Connection failed: " . $conn->connect_error);<br>
}<br>
echo "Connected successfully";<br>
$conn->close();//CLOSE THE CONNECTION <br>
?><br>
<b>Database connection using MySQLi Procedural</b><br>
?php<br>
$servername = "localhost";<br>
$username = "username";<br>
$password = "password";<br>

// Create connection<br>
$conn = mysqli_connect($servername, $username, $password);<br>

// Check connection<br>
if (!$conn) {<br>
  die("Connection failed: " . mysqli_connect_error());<br>
}<br>
echo "Connected successfully";<br>
mysqli_close($conn);//CLOSE THE CONNECTION <br>
?><br>
<b>Database connection using PDP</b><br>
?php<br>
$servername = "localhost";<br>
$username = "username";<br>
$password = "password";<br>

try {<br>
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);<br>
  // set the PDO error mode to exception<br>
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br>
  echo "Connected successfully";<br>
} catch(PDOException $e) {<br>
  echo "Connection failed: " . $e->getMessage();<br>
}<br>
$conn = null;//CLOSE THE CONNECTION <br>
?><br>
    </section>
    <section id="p43" style="margin-left:250px">
<h1>MySQLi Vs PDO</h1><br>
Both MySQLi and PDO have their advantages:<br>

PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.<br>

So, if you have to switch your project to use another database, PDO makes the process easy. 
You only have to change the connection string and a few queries. With MySQLi, you will need 
to rewrite the entire code - queries included.<br>

Both are object-oriented, but MySQLi also offers a procedural API.<br>

Both support Prepared Statements. Prepared Statements protect from SQL injection, and are 
very important for web application security.<br>

    <section id="p44" style="height:auto">
<h1>Session in PHP</h1><br>
A session is a way to store information (in variables) to be used across multiple 
pages. Unlike a cookie, the information is not stored on the users computer.<br>
When you work with an application, you open it, do some changes, and then you close it. 
This is much like a Session. The computer knows who you are. It knows when you start 
the application and when you end. But on the internet there is one problem: the web 
server does not know who you are or what you do, because the HTTP address doesn't 
maintain state.<br>

Session variables solve this problem by storing user information to be used across 
multiple pages (e.g. username, favorite color, etc). By default, session variables 
last until the user closes the browser.<br>

So; Session variables hold information about one single user, and are available to 
all pages in one application.<br>
<b>$_SESSION is an associative array that contains all session variables. It is used to set and get session variable values.</b><br>
<b>Start a session from 1 php file :</b><br>
?php<br>
// Start the session<br>
session_start();<br>
?><br>
DOCTYPE html><br>
html><br>
body><br>

?php<br>
// Set session variables<br>
$_SESSION["favcolor"] = "green";<br>
$_SESSION["favanimal"] = "cat";<br>
echo "Session variables are set.";<br>
?><br>
<b>Get PHP Session Variable Values</b><br>
?php<br>
session_start();<br>
?><br>
!DOCTYPE html><br>
html><br>
body><br>

?php<br>
// Echo session variables that were set on previous page<br>
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";<br>
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";<br>
?><br>
<b>show all the session variable values for a user session</b><br>
?php<br>
session_start();<br>
?><br>
!DOCTYPE html><br>
html><br>
body><br>

?php<br>
print_r($_SESSION);<br>
?><br>


    </section>
    <section id="p45" >
<h1>header in PHP</h1><br>
The header in PHP is a PHP built-in function for sending a raw 
HTTP header. The HTTP functions are those that manipulate 
information sent by the webserver to the client or browser before 
it sends any further output. The header() function in PHP sends 
a raw HTTP header to a client or browser.<br><br>
When we develop restful apis  using php than we sometimes also have to pass 
some additional information called header information. <br>
header('Content-Type: application/json') <br>
//the data returned by the application is in main format<br>
header('Access-Control-Allow-Methods:PUT')<br>
 //The type of restful method we r going to use <br>
header('Access-Control-Allow-Origin: *')<br>
//this header is related with security. If we r passing * than it means anyone <br>
can use my api in their application. If we want to give access of my api to 
any particular website than I have to give it's name in place of *<br>
header('Access-Control-Allow-Headers:<header name>')<br>
//Also related with security. Instead of giving multiple headers separately we
 can give those headers under header name which will reduce the risk of hacking of our 
 website because hacker won't allow to pass any header in it by themselves. <br>
<br>

<b>Basically, there are two types of header calls. One is header which starts 
  with string “HTTP/” used to figure out the HTTP status code to send. 
  Another one is the “Location” which is mandatory.</b><br>

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
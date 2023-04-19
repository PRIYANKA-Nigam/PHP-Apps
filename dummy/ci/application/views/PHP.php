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
The array() function is used to create an array.
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
?php<br>
$name="Vineet Saini";<br>
$age=24;<br>
var_dump($name);<br>
var_dump($age);<br>
?><br>
Output: string(!2) "Vineet Saini" int(24) <br>

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
<h1>PHP Functions</h1>

    </section>
    <section id="p23">
<h1>PHP Array Function</h1>
array_pop($arr)
    </section>
    <section id="p24">
<h1>array_push($arr,$val)</h1>

    </section>
    <section id="p25">
<h1>array_shift($arr)</h1>
The standard Lorem Ipsum passage, used since the 1500s

    <section id="p26">
<h1>array_unshift($arr,$val)</h1>

    </section>
    <section id="p27">
<h1>Ways of including 1 PHP file</h1>
include
    </section>
    <section id="p28" >
<h1>require</h1>

    </section>
    <section id="p29">
<h1>include_once</h1>

    </section>
    <section id="p30">
<h1>require_once</h1>

    </section>
    <section id="p31">
<h1>In-built function in PHP</h1>
explode()

    <section id="p32">
<h1>implode()</h1>

    </section>
    <section id="p33">
<h1>strlen()</h1>

    </section>
    <section id="p34" >
<h1>str_word_count()</h1>

    </section>
    <section id="p35">
<h1>pow()</h1>

    </section>
    <section id="p36">
<h1>rand()</h1>

    </section>
    <section id="p37">
<h1>str_replace()</h1>
The standard Lorem Ipsum passage, used since the 1500s

    <section id="p38">
<h1>sort()</h1>

    </section>
    <section id="p39">
<h1>array_merge()</h1>

    </section>
    <section id="p40" >
<h1>array_unique()</h1>

    </section>
    <section id="p41">
<h1>count()</h1>
print
    </section>
    <section id="p42">
<h1>How to make Database connection in PHP</h1>

    </section>
    <section id="p43">
<h1>MySQLi Vs PDO</h1>
The standard Lorem Ipsum passage, used since the 1500s

    <section id="p44">
<h1>Session in PHP</h1>

    </section>
    <section id="p45" >
<h1>header in PHP</h1>

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
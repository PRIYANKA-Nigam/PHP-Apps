<?php
include("your_language.php");
$en_select='';
$hi_select='';
$lang='';
   if((isset($_GET['language']) && $_GET['language']=='en')|| !isset($_GET['language'])){
$en_select='selected';
$lang='en';
   }
   else{
    $hi_select='selected';
    $lang='hi';
   }

?>

<html>
    <head>
        <title>language Translator</title>
        <style>
body{
    margin:auto;
    width:80%;
    background-color: aqua;
    font-family: Arial;
}
#container{
margin-top: 20px;
}
#nav_bar{background-color: white;padding: 20px;}
#nav_bar ul{margin:0px;padding: 0px;}
#nav_bar li{
    list-style: none;
margin-right: 5px;
display: inline;
}
#mav_bar li a{text-decoration:underline;color: #000;font-weight: bold;}
#content{background-color: white;padding: 20px;margin-top: 5px;}
#nav_bar select{padding: 5px;}
.fro{
    float: right;
}
            </style>
    </head>
    <body>
        <div id="container">
            <div id="nav_bar">
<ul>
    <li><a href="language.php"><?php echo $top_nav[$lang]['0']  ?></li>
    <li><a href="#"><?php echo $top_nav[$lang]['1']  ?></li>
    <li><a href="#"><?php echo $top_nav[$lang]['2']  ?></li>
    <li class="fro">
        <select onchange="setLang()" name="language" id="language">
        <option value="">Choose language</option>
        <option value="en" <?php echo $en_select ?>>English</option>
        <option value="hi" <?php echo $hi_select ?>>Hindi</option>
    </select></li>
</ul>
            </div>
            <div id="content">
<p>My name is Priyanka Nigam.I am coding in PHP .I work as a developer with backend,frontend,and middleware.</p>
            </div>
        </div>
       <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
       <script>
function setLang(){
    var language=jQuery('#language').val();
    window.location.href='http://localhost/Dictionary%20App/language.php#?language='+language;
}
            </script>
    </body>
</html>
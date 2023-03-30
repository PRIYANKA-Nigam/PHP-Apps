<?php
include("your_language.php");
include("../connection.php");
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
$sql="select * from language where lang='$lang'";
$con->set_charset('utf8');
$res=mysqli_query($con,$sql);
$row=$res->fetch_all(MYSQLI_ASSOC);

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
#content p{line-height: 25px;}
#nav_bar select{padding: 5px;}
.fro{
    float: right;
}
#content2{background-color: white;padding: 20px;margin-top: 5px;}
#content2 p{line-height: 25px;}
            </style>
    </head>
    <body>
        <div id="container">
            <div id="nav_bar">
                <h1><?php echo $top_nav[$lang]['3']  ?></h1>
<ul>
    <li><a href="language.php" class="active"><?php echo $top_nav[$lang]['0']  ?></li>
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
                <h1><?php echo $row['1']['page_content'] ?></h1>
<!-- <p><?php echo $website_content[$lang]['0']  ?></p>
<p><?php echo $website_content[$lang]['1']  ?></p>
<p><?php echo $website_content[$lang]['2']  ?></p>
<p><?php echo $website_content[$lang]['3']  ?></p> -->
<p><?php echo $row['0']['page_content'] ?></p>
            </div>

            <div id="content2">
            <div id="google_element"></div>
                <h1>Contents will be shown from Google Translator API</h1>
                <p>A chatbot is software that simulates human-like conversations with users via chat. 
                    Its key task is to answer user questions with instant messages.</p>
               <p>Learn how to create a chatbot from A to Z by taking our Free Chatbot Designer Course. 
                Find out how to successfully use chatbots in support, sales, marketing, and data 
                collection and achieve better business results with less effort.</p>
                <p>What does an AI chatbot do? What is a chatbot? A chatbot is a computer program that 
                    uses artificial intelligence (AI) and natural language processing (NLP) to understand 
                    customer questions and automate responses to them, simulating human conversation.</p>
                  
            </div>           
        </div>
        <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
       <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
       <script>
function setLang(){
    var language=jQuery('#language').val();
    window.location.href='http://localhost/Dictionary%20App/languageTranslatorApp/language.php/?language='+language;
}
            </script>
    </body>
</html>
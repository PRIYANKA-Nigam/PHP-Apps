
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once('quiz.php');
// if( ! $_SESSION)
// {
//         session_start(); 
//     $quiz = $_SESSION['quiz'];
//     $_SESSION['quiz']=null; 
//     echo $quiz;
// }
$this->uri->segment(2);   //Quizdisplay
 $quiz = $this->uri->segment(3);   //quizname
     //ABS ->collegename

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Quiz</title>
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
}
      </style>
        </head>
    <body>
    <div id="google_element" style="float:right"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
<div id="container">
<img src='<?=base_url().'setting.jpg'?>' id="icon" width="25px" height="25px" >
<a href="<?=base_url().'Welcome/Quiz'?>" >
<button class="btn btn-success" style="float:right;margin-right:10px;margin-top:15px">BACK</button></a>
	<h1>Play the Quiz!</h1>
    <form method="post" action="<?php echo base_url();?>Welcome/resultdisplay/<?=$quiz?>">
<?php
foreach($Questions as $row){ ?>

<?php $ans_array=array($row->option1,$row->option2,$row->option3,$row->option4);
shuffle($ans_array); ?>
<p class="g"><?=$row->qid?>.<?=$row->question?></p>
<input type="radio" name="qid<?=$row->qid?>" value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?><br>
<input type="radio" name="qid<?=$row->qid?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
<input type="radio" name="qid<?=$row->qid?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
<input type="radio" name="qid<?=$row->qid?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>

<?php } ?>
<br><br>
<input type="submit" value="Submit">
    </form>
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
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Quiz</title>
</head>
<body>

<div id="container">
	<h1>Quiz Result!</h1>

    <?php  $score=0; ?>

    <?php $array1=array(); ?>
    <?php $array2=array(); ?>
    <?php $array3=array(); ?>
    <?php $array4=array(); ?>
    <?php $array5=array(); ?>
    <?php $array6=array(); ?>
    <?php $array7=array(); ?>
    <?php $array8=array(); ?>


    <?php foreach($checks as $checkans){ ?>
        <?php array_push($array1,$checkans); } ?>
        <?php foreach($results as $res){ ?>
        <?php array_push($array2,$res->answer); 
              array_push($array3,$res->qid); 
              array_push($array4,$res->question); 
              array_push($array5,$res->choice1); 
              array_push($array6,$res->choice2); 
              array_push($array7,$res->choice3); 
              array_push($array8,$res->answer); 
        
    
    }  ?>

    <?php
    for($i=0;$i<=4;$i++){ ?>

    <form method="post" action="<?php echo base_url();?>index.php/welcome/index">

<p><?=$array3[$i]?>.<?=$array4[$i]?></p>

<?php if($array2[$i]!=$array1[$i]){ ?>

    <p><span style="background-color:#ff9c9e"><?=$array1[$i]?></span></p>
    <p><span style="background-color:#adff84"><?=$array2[$i]?></span></p>


<?php }else{ ?>
    <p><span style="background-color:#adff84"><?=$array1[$i]?></span></p>
    <?php $score=$score+1;  ?>
<?php } } ?>
<br><br>

<h2>Your Score: </h2>
<h1><?=$score?>/5</h1>
<input type="submit" value="Play Again">
    </form>
</div>

</body>
</html>
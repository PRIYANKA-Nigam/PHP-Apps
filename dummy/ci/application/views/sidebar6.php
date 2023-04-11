<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css');    ?>">
</head>
<body >
   <div class="side-bar" >
    <div class="menu">
        <div class="item"> <a href="#"><i class="fas fa-desktop"></i>Dashboard</a> </div>
        <div class="item">
             <a class="sub-btn" href="#"><i class="fas fa-table"></i>Table<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="#" class="sub-item">Sub 1</a>
                <a href="#" class="sub-item">Sub 2</a>
                <a href="#" class="sub-item">Sub 3</a>
                <a href="#" class="sub-item">Sub 4</a>
            </div>
            </div>
        <div class="item"> <a href="#"><i class="fas fa-th"></i>Forems</a> </div>
        <div class="item" > <a class="sub-btn" href="#"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
                <a href="#" class="sub-item">Sub 1</a>
                <a href="#" class="sub-item">Sub 2</a>
                <a href="#" class="sub-item">Sub 3</a>
    </div>  </div>
        <div class="item"> <a href="#"><i class="fas fa-info-circle"></i>About</a> </div>
    </div>
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
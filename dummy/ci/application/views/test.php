<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src='main.js'></script>
    <style>
.dot{
    margin-left: 2dp;
    height: 15px;
    width: 15px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
   
    margin-left: 1%;
}

.containers {
    align-items: center;
    justify-content: center;
  }
  
  img {
    max-width: 15%;
    max-height:10%;
    float: left;
  }
  .image2{
    max-width: 70%;
    max-height:10%;
    float: right;
    width: 60rem;
    margin-top: 80px;
    margin-right: 4px;
    /* padding-right: 5px; */
  
  
  }
  
  .text {
    font-size: 20px;
    padding-left: 40px;
    /* padding-top: 10%; */
    margin-top: 80px;
    float: left;
    display: flexbox;
    background-color: blueviolet;
    border-radius: 50%;
  }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="containers">
        <div class="image">
                <img src="<?=base_url().'assets/images/carttonRight.jpg'?>" width="200px" height="200px">
        </div>
           
            <div class="text">
                <label>Confuse to choose right career path for yourself.Here is your key.</label>
            </div>
            
        </div>
      
    
      
        <div class="containers">
        <div class="image2">
                <img src="<?=base_url().'assets/images/cartoonLeft.jpg'?>" width="350px" height="250px">
        </div>
        </div>
        <!-- <div class="cont">
            <div class="row">
            <span class="dot"></span> 
            </div>
            <div class="row">
            <span class="dot"></span> 
            </div>
            <div class="row">
            <span class="dot"></span> 
            </div>
            <div class="row">
            <span class="dot"></span> 
            </div>
        </div> -->
    
  </body>
</html>
</body>
</html>
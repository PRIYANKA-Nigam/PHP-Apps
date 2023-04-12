<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Framework Using Azax</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel = "stylesheet" href  = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src='main.js'></script>
</head>
<body >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
<div class="col-lg-6 offset-lg-3">
    <form>
       <div class="form-content">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Program</span>
        <select class="form-control" aria-describedby="basic-addon1" data-toggle="tooltip" 
        title="please select your fav languge" onchange="mylang(this.value)">
        <option>Select Here</option>
            <option value="PHP">PHP</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="Javascript">Javascript</option>
        </select><br><br>

            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon2">Framework</span>
        <select class="form-control" aria-describedby="basic-addon1" data-toggle="tooltip" id="frameworkList"
        title="please select your fav languge">
        <option>Select Here</option>
           
        </select><br><br>

            </div>
        </div>
        </form>
       </div>
   
    </div>
    <script>
function mylang(data){
    alert(data);
    const ajaxreq =new XMLHttpRequest(); //with xmlhttprequest we don't need to reload the page .It's an azax obj 
                                          // through which we can exchange data with web server behind the scene.
       ajaxreq.open('GET','http://localhost/DialogAzaxForm/ajaxJS/getData.php?list='+data,'true');
       ajaxreq.send();
       ajaxreq.onreadystatechange =function(){
        if(ajaxreq.readyState ==4 && ajaxreq.status ==200){
            document.getElementById('frameworkList').
            innerHTML =ajaxreq.responseText;
        }
       }

}


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
        </script>
</body>
</html>
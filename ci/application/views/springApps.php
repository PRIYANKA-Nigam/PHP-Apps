
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <style> 
 body{
  background: var(--primary-color);
  max-height: 100vh; 
  /* by giving max-height: 100vh the footer got stick to the bottom of the page */
}
</style> 
        </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <div class="row">
    <div id="google_element" style="float:right"></div>
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script>
    <a href="<?=base_url().'Welcome/Tutorials'?>" ><button class="btn btn-success" >Back</button></a> 





    </div>
    <?php 
        include('footer.php');
        ?>
    </body>
</html>
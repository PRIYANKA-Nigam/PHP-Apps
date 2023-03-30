<!DOCTYPE html>
<html>
    <head>
        <title>Display Single PDF</title>
    </head>
    <body>
    
        <form action="" method="post" enctype="multipart/form-data">
        <label>Upload PDF Docs
        <input type="file" name="pdf">
        </label>
        <input type="submit" name="submit" value="UPLOAD">
        <input type="submit" name="submit2" value="VIEW">
     </form>
     <?php
// require_once('connection.php');
if(isset($_POST['submit'])){
   
        $file=$_FILES['pdf']['name'];
        $file_tmp=$_FILES['pdf']['tmp_name'];
        echo "<br>"; $final='';
        $ext=pathinfo($file,PATHINFO_EXTENSION);
          try { if(!file_exists('data/'.$file)){
                move_uploaded_file($file_tmp,'data/'.$file);
            }
        }catch(mysqli_sql_exception $e){
                $e->getMessage();
            }
    }

if(isset($_POST['submit2'])){
   // header("location:pdf_upload2.php");
   $info=file_get_contents('data/'.$file);
   ?>
    <embed type="application/pdf" src="data/<?php  echo $info; ?>"  width="1200" height="600">
    <?php
}
?>
    </body>
</html>
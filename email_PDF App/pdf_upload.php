<!DOCTYPE HTML>
<HTML>
    <head>
        <title>Insert PDF</title>
        <style media="screen">
div{
    border: 2px solid black;
    width: 500px;
    margin-left: 400px;
    margin-top: 100px;
     padding: 20px;
}
form{
    margin-left: 70px;

}
label{
font-size: 20px;
font-weight: bold;
}
#pdf{
    font-size: 20px;
font-weight: bold;
margin-top: 20px;
}
#upload{
    font-size: 15px;
font-weight: bold;
margin-left: 150px;
}
            </style>
    </head>
    <body>
        <div class="">
     <form action="" method="post" enctype="multipart/form-data">
        <label>Upload PDF Docs
        <input type="file" name="pdf[]" multiple>
        </label>
        <input type="submit" name="submit" value="UPLOAD">
        <input type="submit" name="submit2" value="VIEW">
     </form>
     <?php
require_once('connection.php');
if(isset($_POST['submit'])){
    foreach($_FILES['pdf']['tmp_name'] as $key=>$value){
        $file=$_FILES['pdf']['name'][$key];
        $file_tmp=$_FILES['pdf']['tmp_name'][$key];
        echo "<br>"; $final='';
        $ext=pathinfo($file,PATHINFO_EXTENSION);
          try { if(!file_exists('pdf/'.$file)){
                move_uploaded_file($file_tmp,'pdf/'.$file);
                $ins="insert into pdfs_upload(pdf_name) values('$file')";
                mysqli_query($con,$ins);
            }
            // else{
            //     $file=str_replace('.','-',basename($file,$ext));
            //     $newFile=$file.time().".".$ext;
            //     move_uploaded_file($file_tmp,'files/'.$newFile);
            //     $final=$newFile;
            //     $ins="insert into pdfs_upload(pdf_name) values('$final')";
            //     mysqli_query($con,$ins);
            // }
        }catch(mysqli_sql_exception $e){
                $e->getMessage();
            }
    }
}
if(isset($_POST['submit2'])){
    header("location:pdf_upload2.php");
}
?>
        </div>
    </body>
</HTML>
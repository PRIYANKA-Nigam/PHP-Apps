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
        <label>Take a picture
        <input type="file" name="image[]" id="img" multiple>
        </label>
        <input type="submit" name="submit" value="UPLOAD">
        <input type="submit" name="submit2" value="VIEW">
     </form>
     <?php
require_once('connection.php');
if(isset($_POST['submit'])){
    $extension_array=array('jpeg','jpg','png','gif');
    foreach($_FILES['image']['tmp_name'] as $key=>$value){
        $file=$_FILES['image']['name'][$key];
        $file_tmp=$_FILES['image']['tmp_name'][$key];
        echo "<br>"; $final='';
        $ext=pathinfo($file,PATHINFO_EXTENSION);
        if(in_array($ext,$extension_array)){
          try { if(!file_exists('files/'.$file)){
                move_uploaded_file($file_tmp,'files/'.$file);
                $ins="insert into multipleimageupload(imageName) values('$file')";
                mysqli_query($con,$ins);
            }else{
                $file=str_replace('.','-',basename($file,$ext));
                $newFile=$file.time().".".$ext;
                move_uploaded_file($file_tmp,'files/'.$newFile);
                $final=$newFile;
                $ins="insert into multipleimageupload(imageName) values('$final')";
                mysqli_query($con,$ins);
            }}catch(mysqli_sql_exception $e){
                $e->getMessage();
            }
           
            // $createtime=date('Y-m-d h:i:s');
           
        }else{
             echo "uploaded type not supported.Please import file having extension jpeg/jpg/png/gif";
        }
    }
}
if(isset($_POST['submit2'])){
    header("location:display_pdf.php");
}
?>
        </div>
    </body>
</HTML>
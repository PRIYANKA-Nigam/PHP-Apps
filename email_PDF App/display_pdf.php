<!DOCTYPE html>
<html>
    <head>
    <title>Display PDF</title>
    <style media="screen">
embed{
    border: 2px solid black;
    margin-top: 5px;
}
.div1{ margin-left: 110px;
}
        </style>
    </head>
    <body>
      <div class="div1" >
        <?php
include("connection.php");
$pdfname=$_GET['name'];
    $sql="select * from pdfs_upload where pdf_name='$pdfname'";
$query=mysqli_query($con,$sql);
while($info=mysqli_fetch_array($query)){
    ?>
    <embed type="application/pdf" src="pdf/<?php  echo $info['pdf_name']; ?>"  width="1200" height="600">
    <?php

}
 
?>
      </div>
    </body>
</html>
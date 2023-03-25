<!DOCTYPE html>
<html>
    <head>
        <title>Display PDFs</title>
        <style>
        input{
            margin: auto;
            display: block;
            width: 50px;
            height: 50px;
        }
        table{
            margin: auto;
           
        }
            </style>
    </head>
    <body>
        <h1><u><center>Imported Docs</center></u></h1><br>
        <table border="2">
            <thead style="background-color:black;color:white">
            <tr>
                <th>S.No. </th>
                <th>PDF Name</th>
            </tr> 
         </thead>
            <tbody>
                <?php
              include 'connection.php';
              $select ="select * from pdfs_upload";
              $query=mysqli_query($con,$select);
              $result=mysqli_fetch_array($query);
            $count=mysqli_num_rows($query);$i=1;
              while($result=mysqli_fetch_array($query)){   
                ?>
                <tr>
              
                    <td style="background-color:black;color:white"><?php echo $i++;?></td>
                    <td><?php echo $result['pdf_name'];?></td>
                      <td style="background-color:green;color:black;width:80px;text-align:center">
                      <a href="display_pdf.php?name=<?=$result['pdf_name']; ?>">View</a></td> 
                      <td style="background-color:red;color:black;width:80px;text-align:center">
                      <a href="pdf_upload2.php?name=<?=$result['pdf_name']; ?>">Delete</a></td>
                </tr>
                <?php 

              }
              $pdfname=isset($_GET['name'])?$_GET['name']:null;
$query ="delete from pdfs_upload where pdf_name='$pdfname'";
mysqli_query($con,$query);
               ?>
            </tbody>
        </table>
   
        <br>
    </body>
</html>
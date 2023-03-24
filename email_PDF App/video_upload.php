<!DOCTYPE html>
<html>
    <head>
        <title>Video Upload</title>
    </head>
    <body>
        <div class="grid">
            <?php
            include('connection.php');
$sql="select * from videos_upload";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
    $data=$row['url'];
    $final=str_replace('watch?v=','embed/',$data);
    echo "
    <iframe src='$final' 
    frameborder='0'
    allow='autoplay:encrypted-media'
    allowfullscreen>
    </iframe>
    ";
}

?>
        </div>
    </body>
</html>
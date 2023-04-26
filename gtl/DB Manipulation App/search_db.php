<?php
$con=mysqli_connect("localhost","root","","login_sample_db");
$sql="select * from questions order by qid limit 8";
$results=mysqli_query($con,$sql);
if(isset($_POST['submit'])){
    if(!empty($_POST['search'])){
        $query=str_replace(" ","+",$_POST['search']);
        header("location:search_db.php?search=" .$query);
       
    }
}

?>
<!Doctype html>
<html>
    <head>
        <title>Search in DB</title>
    </head>
    <body>

        <h1><center>Search multiple words at a time in Mysql </center></h1><br>
        <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
        <b><center>Marquee Mysql DB Text</center></b>
<?php 
if(mysqli_num_rows($results)>0){
while($row=mysqli_fetch_array($results)){
    echo '<label>'.$row['qid'].' . '.$row['question'].'</label>';
    echo '<br>';
}
}

?>
</marquee>
        <br><br><br><br><br><br>
        <form action="" method="post">
            <label>Enter Search Text</label>
            <input type="text" name="search" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>" />
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <br><br>
        <table border="2">
            <?php 
                if(isset($_GET['search'])){
                    $condition='';
                    $q = explode(" ",$_GET['search']);
                    foreach($q as $t){
                        $condition .="answer LIKE '%".mysqli_real_escape_string($con,$t)."%' OR ";
                    }
                    $condition=substr($condition,0,-4);
                    $sql="select * from answers where ".$condition;
                    $res=mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_array($res)){
                        echo '<tr><td>'.$row['answer'].'</td></tr>';
                    }
                    }else {
                        echo '<label>Data not found</label>';
                    }

                }
            ?>
        </table>
    </body>
</html>
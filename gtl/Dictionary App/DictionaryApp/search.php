<!doctype html>
<html>
    <head>
        <title>Dictionary</title>
        <style>
a{
    margin: auto;
    padding-right: 20px;
    float: right;
}
            </style>
    </head>
    <body>
        <h1 align="center">Write a word to search</h1>
            <div id="google_element" style="width:120px;height:50px"></div>   
        <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
        <script>
           function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
           }
            </script> 
        <br><br>
        <form action="search.php" method="post" align="center">
            <input size="80" type="text" name="word" value="Enter Search Meaning">
            <input type="submit" name="Search" value="Search">
        </form>
        <?php
        include("../connection.php");
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['Search'])){
        echo "<h1 align='center'>RESULTS</h1>";
        echo "<table width='600' align='center' style='border:solid 1px black;'";
        echo "<tr><th>ID</th><th>Word</th><th>Translation</th></tr>";
        $search=isset($_POST['word'])?$_POST['word']:'';
        $sql="select distinct word,meaning from dictionary where word like '%$search%';";
        $res=mysqli_query($con,$sql);
        $i=1;
        while($row=mysqli_fetch_array($res)){
            echo ("<tr>");
            echo ("<td>"); echo $i;echo ("</td>");
            echo ("<td>"); echo $row['word'];echo ("</td>");
            echo ("<td>"); echo $row['meaning'];echo ("</td>");
            echo ("</tr>");
        }
echo "</table>";

    }
?>
<br><br><hr>
<form method="post" action="">
<label style="font-weight:bold;font-size:25px">Show Full Lexicon</label>
<input type="submit" name="sub" value="click"> 
</form>
<?php
$sql="select * from dictionary order by word asc";
$res=mysqli_query($con,$sql);
if(isset($_POST['sub'])){
    echo "<h1 align='center'>RESULTS</h1>";
        echo "<table width='600' align='center' style='border:solid 1px black;'";
        echo "<tr><th>S.No</th><th>Word</th><th>Translation</th></tr>"; 
        $i=1;
        while($row=mysqli_fetch_array($res)){
            echo ("<tr>");
            echo ("<td>"); echo $i;echo ("</td>");
            echo ("<td>"); echo $row['word'];echo ("</td>");
            echo ("<td>"); echo $row['meaning'];echo ("</td>");
            echo ("</tr>");
            $i++;
        }
echo "</table>";
}

?>
    </body>
</html>
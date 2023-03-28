<!doctype html>
<html>
    <head>
        <title>Dictionary</title>
    </head>
    <body>
        <h1 align="center">Write a word to search</h1>
        <br><br>
        <form action="search.php" method="post" align="center">
            <input size="80" type="text" name="word" value="Enter Search Meaning">
            <input type="submit" name="Search" value="Search">
        </form>
        <?php
        include("connection.php");
        if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "<h1 align='center'>RESULTS</h1>";
        echo "<table width='600' align='center' style='border:solid 1px black;'";
        echo "<tr><th>ID</th><th>Word</th><th>Translation</th></tr>";
        $search=$_POST['word'];
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
    </body>
</html>
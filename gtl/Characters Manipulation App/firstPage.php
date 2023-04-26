<?php 
include('connect.php');
?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <title>weekly task data</title>
        </head>
<body>
<h1><b><center><U>Daily Work Routine</U></center></b></h1>
<br><br>
<form action="weekly.php" method="POST" id="nn" >
<fieldset>
Choose Day : <select name="choose"><br>
<option value="MONDAY">MONDAY</option>
<option value="TUESDAY">TUESDAY</option>
<option value="WEDNESDAY">WEDNESDAY</option>
<option value="THURSDAY">THURSDAY</option>
<option value="FRIDAY">FRIDAY</option>
<option value="SATURDAY">SATURDAY</option>
<option value="SUNDAY">SUNDAY</option>
</select>
</fieldset>
<br><br>
<fieldset>
Enter Task : <input type="text" name="task" placeholder="Write daily chores"/>
</fieldset>
<br><br>
<fieldset>
Choose DateTime : <input type="datetime-local" name="date" placeholder=""/>
</fieldset>
<br><br><br>
<fieldset>
<center><input type="submit" name="submit" value="ADD" form="nn"/></center> </fieldset>
</form>
<form method="post" action="">
<fieldset>
<center><input type="submit" name="submit2" value="VIEW" /></center> </fieldset>
<center>
<fieldset>
<input type="text" name="del" placeholder="Choose Day to be Deleted "/>
<input type="submit" name="submit3" value="DELETE" />
</fieldset></center>
</form>
<?php
if(isset($_POST['submit2']))
{
$sql = "SELECT * FROM task";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0){
    echo "<br><center><b>Weekly Routine:<b></center><br>";
    echo "<center><table style='border:  4px dashed grey;' border=2>";
        echo "<tr>";
            echo "<th>Day:</th>";
            echo "<th>Task:</th>";
            echo "<th>DateTime</th>";
        echo "</tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['day'] . "</td>";
            echo "<td>" . $row['task'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
    echo "</table></center>";
    mysqli_free_result($result);
} else{
    echo "Don't have any saved data in the database.";
}
}
if(isset($_POST['submit3'])){
    $days=$_POST['del'];
    $days=strtoupper($days);
    $sql="SELECT * FROM task WHERE day='$days'"; 
    $result = $conn->query($sql);
   $row=mysqli_fetch_array($result);
   $query="DELETE FROM task WHERE day='$days'";
   $res=$conn->query($query);
    echo "<center><table style='border:  4px dashed grey;' border=2>";
    echo "<tr>";
        echo "<th>Day:</th>";
        echo "<th>Task:</th>";
        echo "<th>DateTime</th>";
    echo "</tr>";
        echo "<tr>";
        echo "<td>" . $row['day'] . "</td>";
        echo "<td>" . $row['task'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
    echo "</tr>";
    echo "</table></center>";
    
    if($res)
    echo "Deleted Successfully";
    else
    echo "Deletion failed";
}


?>
</body>
</HTML>

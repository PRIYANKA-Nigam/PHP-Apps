<!doctype html>
<html>
    <head>
        <title>post db output</title>
</head>
<body>
<table>
<tr>
    <td><b><h2>category_id</td></b></h2>
    <td><b><h2>title</td></b></h2>
    <td><b><h2>body</td></b></h2>
    <td><b><h2>author</td></b></h2>
    <td><b><h2>created_at</td></b></h2>
</tr>
<?php
//include './database/db.php';
$con = mysqli_connect('127.0.0.1','root','','phprest');
$sql="select * from posts";
//$result=$con->query($sql);

$result  = mysqli_query($con,$sql);
if($result->num_rows>0){   
    echo ("<table border=2>");
    echo ("<tr>");
    echo ("<th>"); echo "Category Id";echo ("</th>");
    echo ("<th>"); echo "Title";echo ("</th>");
    echo ("<th>"); echo "Body";echo ("</th>");
    echo ("<th>"); echo "Author";echo ("</th>");
    echo ("<th>"); echo "Created At";echo ("</th>");
    echo ("</tr>");
    while($row=mysqli_fetch_array($result)){
        echo ("<tr>");
        echo ("<td>"); echo $row['category_id'];echo ("</td>");
        echo ("<td>"); echo $row['title'];echo ("</td>");
        echo ("<td>"); echo $row['body'];echo ("</td>");
        echo ("<td>"); echo $row['author'];echo ("</td>");
        echo ("<td>"); echo $row['created_at'];echo ("</td>");
        echo ("</tr>");
    }
    echo ("</table>");
    // while($row=mysqli_fetch_object($result))      ---------> not working
    // {
    //     echo "<tr><td>" . $row["category_id"] ."</td><td>" . $row["title"] . "</td><td>"  . $row["body"]
    //     . "</td><td>" . $row["author"] . "</td><td>" . $row["created_at"] . "</td></tr>;
    // }
}
?>
</table>
</body>
</html>
<?php
include("connection.php");
$username=$_GET['name'];
$num=$_GET['num'];
echo "<h1 align='center'>$num</h1>";
echo "<table width='600' align='center' style='border:solid 1px black;'";
echo "<tr><th>S.No</th><th>Account Balance</th><th>Amount</th><th>Transaction History</th><th>Login Date</th></tr>";
$i=1;
$sql="select * from user_history where acc_num='$username'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){ ?>
                    
<tr>
    <th scope="row"><?=$i  ?></th>
    <td><?=$row['Balance'] ?></td>
    <td><?=$row['Amount'] ?></td>
    <td><?=$row['Mode'] ?></td>
    <td><?=$row['Date'] ?></td>
</tr>
<?php $i++;  }
?>



</tbody></table>


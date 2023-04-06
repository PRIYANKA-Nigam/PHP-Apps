<?php
include("inc/header.php"); ?>
<div class="container">
<h3 class="display-3" style="text-align: center;"><b>Past Days Attendance</b></h3>
<?php  $username=$this->session->userData('username'); ?>
<?php  $email=$this->session->userData('email'); ?>
<?php $college_id = $this->session->userData('college_id'); ?>

<h4> <?php echo "<u>"; echo "Co-admin "; echo "</u>";echo ": ";echo $username; ?> </h4>
<div style="float:right">
    <?php echo anchor("users/attendance/{$college_id}","BACK" , ['class'=> 'btn btn-primary']);   ?>
    </div><br>
<hr>
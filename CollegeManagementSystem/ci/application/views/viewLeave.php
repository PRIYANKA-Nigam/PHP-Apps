<?php
include("inc/header.php"); ?>
<div class="container">
<h3 class="display-3" style="text-align: center;"><b>Applied Leaves</b></h3>
<?php  $username=$this->session->userData('username'); ?>
<?php  $email=$this->session->userData('email'); ?>
<h4><?php echo $username; ?> </h4> 
<div style="float: right;">
<?php echo anchor("users/dashboard","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div><br>
<hr>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Leave Type</th>
                <th scope="col">Leave Description</th>
                <th scope="col">Leave From</th>
                <th scope="col">Leave To</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($leaves)): ?>
                <?php foreach($leaves as $leave):?>
            <tr class="table-active">
                <td><?php echo $leave->leave_type; ?></td>
                <td><?php echo $leave->leave_description; ?></td>
                <td><?php echo $leave->leave_from; ?></td>
                <td><?php echo $leave->leave_to; ?></td>
            </tr>
            <?php  endforeach;?>
            <?php else:?>
                <tr>
                    <td>No Record Found</td>
                </tr>
                <?php endif;?>
        </tbody>
    </table>
</div>
</div>
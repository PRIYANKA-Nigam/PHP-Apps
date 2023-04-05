<?php
include("inc/header.php"); ?>
<div class="container">
<h3 class="display-3" style="text-align: center;"><b>On Leaves Associates</b></h3>
<hr>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">College</th>
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
            <td><?php echo $leave->id; ?></td>
            <td><?php echo $leave->username; ?></td>
            <td><?php echo $leave->email; ?></td>
            <td><?php echo $leave->collegename; ?></td>
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
<div style="float: right;">
<?php echo anchor("admin/dashboard","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div>
</div>

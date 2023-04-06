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
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Student name</th>
                <th scope="col">Course</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($history)): ?>
                <?php foreach($history as $h):
                    @$cnt++; ?>
            <tr class="table-active">
                <td><?php echo $cnt ?></td>
                <td><?php echo $h->studentname; ?></td>
                <td><?php echo $h->course; ?></td>
                <td><?php echo $h->status; ?></td>
                <td><?php echo $h->date; ?></td>
                <td><?php echo $h->time; ?></td>
                <td><?php echo anchor("users/editAttendance/{$h->studentname}?{$h->date}","EDIT",['class'=>'btn btn-primary']);  ?></td>
                <td><?php echo anchor("users/deleteAttendance/{$h->studentname}","DELETE",['class'=>'btn btn-primary']);  ?></td>
            </tr>
            <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td>No Record Found</td>
                </tr>
                <?php endif;?>
        </tbody>
    </table>
</div>
</div>
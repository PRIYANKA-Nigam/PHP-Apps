<?php
include("inc/header.php"); ?>
<div class="container">
<h3 class="display-3" style="text-align: center;"><b>Attendance</b></h3>
<?php  $username=$this->session->userData('username'); ?>
<?php  $email=$this->session->userData('email'); ?>
<h4> <?php echo $username;  ?> </h4>
<?php echo form_open("users/takeAttendance" , ['class'=> 'form-horizontal']);   ?>

    <label >Choose Date</label>
   <input type="date"  name="leave_from" value="<?php echo date('Y-m-d H:i:s'); ?>">

<hr><br>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Student name</th>
                <th scope="col">Present</th>
                <th scope="col">Absent</th>
            </tr>
        </thead>
        <tbody>
            <?php //if(count($students)): ?>
                <?php //foreach($students as $student):?>
            <tr class="table-active">
                <td><?php //echo $student->id; ?></td>
                <td><?php //echo $student->studentname; ?></td>
                <td><?php //echo $student->collegename; ?></td>
            </tr>
            <?php //endforeach;?>
            <?php //else:?>
                <tr>
                    <td>No Record Found</td>
                </tr>
                <?php //endif;?>
        </tbody>
    </table>
</div>
</div>
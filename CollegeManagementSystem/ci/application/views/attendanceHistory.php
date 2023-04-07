<?php
include("inc/header.php"); ?>
<div class="container">
<h3 class="display-3" style="text-align: center;"><b>Past Days Attendance</b></h3>
<?php  if($msg= $this->session->flashdata('message')):  ?>
        <div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
        <?php endif;  ?>
<?php  $username=$this->session->userData('username'); ?>
<?php  $email=$this->session->userData('email'); ?>
<?php $college_id = $this->session->userData('college_id'); ?>
<?php $beforecollegename = $this->uri->segment(2);   //attendanceHistory
      $collegename = $this->uri->segment(3); //ABS ->collegename
 ?>
<h4> <?php echo "<u>"; echo "Co-admin "; echo "</u>";echo ": ";echo $username; ?> </h4>
<div style="float:right;margin-top:20px">
<?php echo form_open("users/DeleteattendancebyDate/{$collegename}/",['class'=> 'form-horizontal']);?>
<input type="date"  name="date2" value="<?php echo date('Y-m-d H:i:s'); ?>">
<input type="submit" name="submit" value="Delete By Date" class="btn btn-success ">
<?php 
echo form_close(); ?> </div>
<?php echo form_open("users/attendancebyDate/{$collegename}/" , ['class'=> 'form-horizontal']);   ?>
     <hr>
   <input type="date"  name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
   <input type="submit" name="submit" value="Filter By Date" class="btn btn-success ">
</div>

<?php 
echo form_close(); ?>

<div style="float:right;margin-right:120px">
    <?php echo anchor("users/attendance/{$college_id}","BACK" , ['class'=> 'btn btn-primary']);   ?>
    </div><br>
<hr>
<div class="row">
    <table class="table table-hover" style="margin-left:60px;width:90%">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Student name</th>
                <th scope="col">Course</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col" colspan="2" >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_POST['date'])){ ?>
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
                <td width="12%"><?php echo anchor("users/editAttendance/{$h->studentname}/{$h->date}/{$collegename}","EDIT STATUS",['class'=>'btn btn-primary']);  ?></td>
                <td  ><?php echo anchor("users/deleteAttendance/{$h->studentname}/{$h->date}/{$collegename}","DELETE",['class'=>'btn btn-primary']);  ?></td>
            </tr>
            <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td>No Record Found</td>
                </tr>
                <?php endif;?>
           <?php }else{?>
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
                <td width="12%"><?php echo anchor("users/editAttendance/{$h->studentname}/{$h->date}/{$collegename}",
                "EDIT STATUS",['class'=>'btn btn-primary']);  ?></td>
                <td  ><?php echo anchor("users/deleteAttendance/{$h->studentname}/{$h->date}/{$collegename}",
                "DELETE",['class'=>'btn btn-primary']);  ?></td>
            </tr>
            <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td>No Record Found</td>
                </tr>
                <?php endif;?>
           <?php } ?>
            ?>
        </tbody>
    </table>
</div>
</div>
<?php
include("inc/header.php"); ?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Leave Type</strong><small> Form</small></div>
                        <div class="card-body card-block">
                        <div class="container">
    <?php echo form_open("admin/createLeaveType" , ['class'=> 'form-horizontal']);   ?>
<h3 class="display-3" style="text-align: center;">Add Leave Type</h3><hr><br>
<?php  if($msg= $this->session->flashdata('message')):  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
    </div>
    <?php endif;  ?>
<!-- call to undefined function form_open() is coming to remove this add 'form' inside helper in autoload.php -->
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Leave</label>
    <div class="col-md-9">
        <?php echo form_input(['name'=>'leave_type','class'=>'form-control','placeholder'=>'Enter Leave Type','value'=>set_value('leave_type')]); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
	<?php echo form_error('leave_type','<div class="text-danger">','</div>');?>
	</div>
</div>


<button type="submit" class="btn btn-primary">ADD</button>
<?php echo anchor("admin/dashboard","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div>
<?php echo form_close(); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
    <table class="table table-hover" style="margin-left: 25px;">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Leave Type</th>
                </tr>
        </thead>
        <tbody>
            <?php if(count($leaves)): ?>
                <?php foreach($leaves as  $leave):?>
            <tr class="table-active">
                <td><?php echo $leave->id; ?></td>
                <td><?php echo $leave->leave_type; ?></td>
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
<?php
include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("admin/createCollege" , ['class'=> 'form-horizontal']);   ?>
<h3 class="display-3" style="text-align: center;">Add College</h3><hr><br>
<?php  if($msg= $this->session->flashdata('message')):  ?>
    <div class="row">
        <div class="alert alert-dismissible alert-success"><?php echo $msg;?></div>
    </div>
    <?php endif;  ?>
<!-- call to undefined function form_open() is coming to remove this add 'form' inside helper in autoload.php -->
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">College</label>
    <div class="col-md-9">
        <?php echo form_input(['name'=>'collegename','class'=>'form-control','placeholder'=>'Enter College Name','value'=>set_value('collegename')]); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
	<?php echo form_error('collegename','<div class="text-danger">','</div>');?>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
<div class="form-group">
    <label class="col-md-3 control-label">Branch</label>
    <div class="col-md-9">
        <?php echo form_input(['name'=>'branch','class'=>'form-control','placeholder'=>'Enter Branch','value'=>set_value('branch')]); ?>
    </div>
</div>
	</div>
	<div class="col-md-6">
    <?php echo form_error('branch','<div class="text-danger">','</div>');?>
	</div>
</div>

<button type="submit" class="btn btn-primary">ADD</button>
<?php echo anchor("admin/dashboard","BACK" , ['class'=> 'btn btn-primary']);   ?>
</div>
<?php echo form_close(); ?>

<?php
include("inc/header.php"); ?>
<div class="container">
<h3 class="display-3" style="text-align: center;"><b>Daily Schedule</b></h3>

<div style="float:right">
    <?php echo anchor("admin/dashboard","BACK" , ['class'=> 'btn btn-primary']);   ?>
    </div><br>
<hr>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Co-admin</th>
                <th scope="col">College name</th>
                <th scope="col">Total Student</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($attendance)): ?>
                <?php foreach($attendance as $h):
                    @$cnt++; 
                    ?>
            <tr class="table-active">
                <td><?php echo $cnt ?></td>
                <td><?php echo $h->username; ?></td>
                <td><?php echo $h->collegename; ?></td>
                <td><?php echo $h->total_student; ?></td>
                <td><?php echo $h->date; ?></td>
                <td><?php echo $h->time; ?></td>
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
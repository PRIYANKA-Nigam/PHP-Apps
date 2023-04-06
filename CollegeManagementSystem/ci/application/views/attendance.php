<?php
include("inc/header.php"); 

?>
<div class="container">
<h3 class="display-3" style="text-align: center;"><b>Attendance</b></h3>
<div style="float:right">
<?php foreach($collegename as $college): ?>
    <?php  $s=$college->collegename; ?>
    <?php endforeach;?>
<?php echo anchor("users/attendanceHistory/{$s}",'Attendance History');?>
</div>
<?php  $username=$this->session->userData('username'); ?>
<?php  $email=$this->session->userData('email'); ?>
<?php $college_id = $this->session->userData('college_id'); ?>

<h4> <?php echo "<u>"; echo "Co-admin "; echo "</u>";echo ": "; echo $username;echo "<br>"; ?> </h4>
<?php foreach($collegename as $college): ?>
    <?php echo "<b><u>"; echo "College Name(Id) "; echo "</u></b>";echo ": ";echo $college->collegename;echo "($college_id)"; ?>
    <?php endforeach;?>
    <div style="float:right">
    <?php echo anchor("users/dashboard","BACK" , ['class'=> 'btn btn-primary']);   ?>
    </div>
<?php echo form_open();   ?>
     <hr>
    <label >Choose Date</label>
   <input type="date"  name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">

<hr><br>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Student name</th>
                <th scope="col">Course</th>
                <th scope="col">Present</th>
                <th scope="col">Absent</th>
            </tr>
        </thead>
        <?php  
                if(isset($_POST['submit'])){
                    $action=NULL;
                    date_default_timezone_set("Asia/Kolkata");
                    $time = date("h:i:sa");
                    $date = $this->input->POST('date');
                    $id = $this->input->POST('id');
                    $name = $this->input->POST('stu');
                    $course = $this->input->POST('course');
                     $cnt = count($id);
                    for($i=0;$i<$cnt;$i++){
                        $a=$i+1;
                        $st = $_POST[$a];
                       
                        $data = array(
                            "studentname"=> $name[$i],
                            "course"=> $course[$i],
                            "collegename"=>$college->collegename,
                            "status"=> $st,
                            "date"=> $date,
                            "time"=> $time
                        );
                        // echo '<pre>';
                        // print_r($data);
                        // echo '</pre>';
                        // exit();
                      
                        if($this->db->insert('user_attendance',$data)){
                            $action = true ;
                        }else{
                            $action = false;
                        }
                    }
                  
                       
                  
                 
                    if($action==true){
                        echo "<div class='row'><div class='col-md-12'><div class='alert alert-success'>Attendance Saved </div></div></div>";
                    }else{
                        echo "<div class='row'><div class='col-md-12'><div class='alert alert-danger'>Attendance not Saved </div></div></div>";
                    }

                }

?>
        <tbody>
            <?php if(count($students)): ?>
                <?php foreach($students as $student):
                    @$cnt++
                    ?>
                 
            <tr class="table-active">
                <td><?php echo $student->id; ?></td>
                <td><?php echo $student->studentname; ?></td>
                <td><?php echo $student->course; ?></td>
                <input type="hidden" name="id[]" value="<?php echo $student->id; ?>" >
                <input type="hidden" name="stu[]" value="<?php echo $student->studentname; ?>" >
                <input type="hidden" name="course[]" value="<?php echo $student->course; ?>" >
              <td> <input type="radio" checked value="P" name="<?php echo $cnt;?>"></td>
              <td> <input type="radio" checked value="A" name="<?php echo $cnt;?>"></td>
                
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
<div style="margin-left:500px">
<input type="submit" name="submit" class="btn btn-success ">
</div>
<?php echo form_close(); ?>
</div>
<?php
class queries extends CI_Model{
    public function getRoles(){
        $roles = $this->db->get('roles');
        if($roles->num_rows()>0){
            return $roles->result();
        }
    }
    public function getColleges(){
        $college = $this->db->get('college');
        if($college->num_rows()>0){
            return $college->result();
        }
    }
    public function registerAdmin($data){
        return $this->db->insert('users',$data);
    }
    public function registerCoadmin($data){
        return $this->db->insert('users',$data);
    }
   
    public function viewAllColleges(){
        $this->db->select(['users.user_id','users.email','college.college_id','users.username','users.gender',
        'college.collegename','college.branch','roles.rolename']);
        $this->db->from('college');
        $this->db->join('users','users.college_id=college.college_id');
        $this->db->join('roles','roles.role_id=users.role_id');
        $users = $this->db->get();
        return $users->result();
    }
    public function chkAdminExists(){
        $chkAdmin=$this->db->where(['role_id'=>'1'])
                   ->get('users');
              if($chkAdmin->num_rows()>0)     {
                return $chkAdmin->num_rows();
              }
    }
    public function adminExists($email,$password){
        $chkAdmin= $this->db->where(['email'=>$email,'password'=>$password])
                   ->get('users');
                   if($chkAdmin->num_rows()>0){
                    return $chkAdmin->row();
                   }
    }
    public function makeCollege($data){
        return $this->db->insert('college',$data);
    }
    public function insertStudent($data){
        return $this->db->insert('student',$data);
    }
    public function getStudents($college_id){
        $this->db->select(['college.collegename','student.id','student.studentname','student.email','student.gender',
        'student.course']);
        $this->db->from('student');
        $this->db->join('college','college.college_id=student.college_id');
        $this->db->where(['student.college_id'=> $college_id]);
        $students=$this->db->get();
        return $students->result();
    }
    public function getStudentRecord($id){
      $this->db->select(['college.college_id','college.collegename','student.id',
      'student.email','student.gender','student.studentname','student.course']);
      $this->db->from('student');
      $this->db->join('college','college.college_id=student.college_id');
      $this->db->where(['student.id'=>$id]);
      $students= $this->db->get();
      return $students->row();
    }
    public function updateStudent($data,$id){
     return $this->db->where('id',$id)
                     ->update('student',$data);
    }
    public function updateAttendance($studentname,$date,$collegename){
        $this->db->select(['user_attendance.status']);
        $this->db->from('user_attendance');
        $this->db->where(['user_attendance.studentname'=>$studentname,'user_attendance.date'=>$date,
        'user_attendance.collegename'=>$collegename]);
        $st=$this->db->get();
        $s=$st->row();
        // echo '<pre>';
        // print_r(($s));
        // echo '</pre>';
        // exit();
        if($s->status=='P'){ $s->status='A';
            return $this->db->where(['studentname'=>$studentname,'date' => $date,'collegename'=>$collegename])
            ->update('user_attendance',$s);
        }else{
            $s->status='P';
            return $this->db->where(['studentname'=>$studentname,'date' => $date])
            ->update('user_attendance',$s);
        }
    }
    public function DeleteAttendance($studentname,$date,$collegename){
             return $this->db->delete('user_attendance',['studentname'=>$studentname,'date' => $date,'collegename'=>$collegename]) ;
    }
    public function deleteAttendanceHistoryByDate($collegename,$date){
        return $this->db->delete('user_attendance',['date' => $date,'collegename'=>$collegename]) ;
    }
    public function removeStudent($id){
        return $this->db->delete('student',['id' => $id]);
    }
    public function addLeavesType($data){
            return $this->db->insert('leave_type',$data);
      }

    public function viewAllLeaves(){
        $leaves = $this->db->get('leave_type');
        return $leaves->result(); 
    } 
    public function insertLeaves($data){
        return $this->db->insert('leave',$data);
    } 
    public function getLeaves($username){
        $this->db->select(['leave_type.leave_type','leave.leave_from','leave.leave_to','leave.leave_description']);
        $this->db->from('leave');
        $this->db->join('leave_type','leave_type.id=leave.leave_id');
        $this->db->where(['leave.username'=> $username]);
        $leaves=$this->db->get();
        return $leaves->result(); 
    }
    public function getTotalLeaves(){
        $this->db->select(['leave_type.leave_type','leave.leave_from','leave.leave_to','leave.leave_description',
    'leave.id','leave.username','leave.email','college.collegename']);
        $this->db->from('leave');
        $this->db->join('users','users.username=leave.username');
        $this->db->join('college','users.college_id=college.college_id');
        $this->db->join('leave_type','leave_type.id=leave.leave_id');
        $leaves=$this->db->get();
        return $leaves->result(); 
    }
    public function getCollegeName($college_id){
        $this->db->select(['college.collegename']);
        $this->db->from('college');
        $this->db->where(['college.college_id'=>$college_id]);
        $collegename = $this->db->get();
        return $collegename->result();
    }
   public function getAttendanceHistory($collegename){
       $this->db->select('*');
       $this->db->from('user_attendance');
       $this->db->where('collegename',$collegename);
       $query =$this->db->get();
       return $query->result();
      
   }
   public function getAttendanceHistoryByDate($collegename,$date){
    $this->db->select('*');
    $this->db->from('user_attendance');
    $this->db->where(['collegename'=>$collegename,'date'=>$date]);
    $query =$this->db->get();
    return $query->result();
   }
   public function viewFullStatus(){
    $this->db->select(['count(*) as total_student','user_attendance.collegename',
    'user_attendance.date','user_attendance.time','college.college_id','users.username']);
    $this->db->from('user_attendance');
    $this->db->join('college','user_attendance.collegename=college.collegename');
     $this->db->join('users','users.college_id=college.college_id');
    $this->db->group_by('user_attendance.collegename','user_attendance.date','user_attendance.time');
     $list= $this->db->get();
    return $list->result();
   }
   public function updateLeaveType($data,$id){
    return $this->db->where('id',$id)
                    ->update('leave_type',$data);
   }
   public function deleteLeaveType($id){
    return $this->db->delete('leave_type',['id' => $id]);
   }
}

?>
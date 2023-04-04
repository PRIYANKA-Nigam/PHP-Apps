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
    public function removeStudent($id){
        return $this->db->delete('student',['id' => $id]);
    }
}

?>
<?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath. '/../lib/Database.php');
?>

<?php
  class Student{
    private $db;
    public function __construct(){
      $this->db = new Database();
    }

    public function getAllStudents(){
      $query = "SELECT * FROM tbl_student";
      $result = $this->db->select($query);
      return $result;
    }

    public function addStudent($data){
      $name = $data['name'];
      $roll = $data['roll'];
      $registration = $data['registration'];
      $department = $data['department'];

      $name = mysqli_real_escape_string($this->db->link, $name);
      $roll = mysqli_real_escape_string($this->db->link, $roll);
      $registration = mysqli_real_escape_string($this->db->link, $registration);
      $department = mysqli_real_escape_string($this->db->link, $department);

      if (empty($name) || empty($roll) || empty($registration) || empty($department)) {
        $msg = "<div class='alert alert-danger'><strong>Error !!</strong>Field Must Not Empty</div>";
        return $msg;
      }else{
        $student_query = "INSERT INTO tbl_student(name, roll, registration, department) VALUES('$name', '$roll', '$registration', '$department')";
        $student_result = $this->db->insert($student_query);

        $attend_query = "INSERT INTO tbl_attend(roll) VALUES('$roll')";
        $attend_result = $this->db->insert($attend_query);

        if ($student_result) {
          $msg = "<div class='alert alert-success'><strong>Succes !!</strong>You've Successfully Inserted Data</div>";
          return $msg;
        }else{
          $msg = "<div class='alert alert-danger'><strong>Oops !!</strong>SOmething Went Wrong, Please Try Again</div>";
          return $msg;
        }
      }
    }

    public function insertAttendance($date, $data = array()){
      $query = "SELECT DISTINCT attend_date FROM tbl_attend";
      $getData = $this->db->select($query);
      if ($getData) {
        while ($result = $getData->fetch_assoc()) {
          $get_date = $result['attend_date'];
          if ($date == $get_date) {
            $msg = "<div class='alert alert-danger'><strong>Oops !!</strong>Attendance Already Taken, If You Nedd To Change Then Edit That.</div>";
            return $msg;
          }
        }

        foreach ($data as $attend_key => $attend_value) {
          if ($attend_value == "present") {
            $query = "INSERT INTO tbl_attend(roll, attend, attend_date) VALUES( '$attend_key', 'present', now())";
            $dataInsert = $this->db->insert($query);
          }elseif ($attend_value == "absent") {
            $query = "INSERT INTO tbl_attend(roll, attend, attend_date) VALUES( '$attend_key', 'absent', now())";
            $dataInsert = $this->db->insert($query);
          }
        }
        if ($dataInsert) {
          $msg = "<div class='alert alert-success'><strong>Success !!</strong>Attendance Successfully Taken</div>";
          return $msg;
        }else{
          $msg = "<div class='alert alert-danger'><strong>Oops !!</strong>Attendance Not Taken.</div>";
          return $msg;
        }
      }
    }
    public function getAllAttendDate(){
      $query = "SELECT DISTINCT attend_date FROM tbl_attend";
      $getData = $this->db->select($query);
      return $getData;
    }
    public function getAllStudent($date){
      $query = "SELECT tbl_student.*, tbl_attend.* FROM tbl_student INNER JOIN tbl_attend ON        tbl_student.roll = tbl_attend.roll WHERE attend_date = '$date'";
      $getData = $this->db->select($query);
      return $getData;
    }

    public function updateAttendance($date, $attend=array()){
        foreach ($attend as $attend_key => $attend_value) {
          if ($attend_value == "present") {
            $query = "UPDATE tbl_attend SET
                    attend = 'present'
                    WHERE roll = '".$attend_key."'
                    AND attend_date = '".$date."'";
            $result = $this->db->update($query);
          }elseif ($attend_value == "absent") {
            $query = "UPDATE tbl_attend SET
                    attend = 'absent'
                    WHERE roll = '".$attend_key."'
                    AND attend_date = '".$date."'";
            $result = $this->db->update($query);
          }
        }
        if ($result) {
          $msg = "<div class='alert alert-success'><strong>Success !!</strong>Attendance Successfully Updated</div>";
          return $msg;
        }else{
          $msg = "<div class='alert alert-danger'><strong>Oops !!</strong>Attendance Not Updated.</div>";
          return $msg;
        }
      }

  }

?>

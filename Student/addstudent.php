<?php
include_once('../dbConnection.php');

// Checking Email Already Registered
if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){
    $stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '".
    $stuemail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}

// Insert Student
if(isset($_POST['stusignup']) && isset($_POST['stuname'])
 && isset($_POST['stuemail']) && isset($_POST['stupassword'])){
  
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupassword = $_POST['stupassword'];

$sql = "INSERT INTO student(stu_name,stu_email,stu_password )VALUES
('$stuname','$stuemail','$stupassword')";

if($conn->query($sql) == TRUE){
    echo json_encode("OK");
} else {
    echo json_encode("Failed");
}
}
// Student Login Verification
// Student Login Verification

    if(isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stulogpassword'])){
      $stuLogEmail = $_POST['stuLogEmail'];
      $stulogpassword = $_POST['stulogpassword'];
      $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email='".$stuLogEmail."' AND stu_pass='".$stulogpassword."'";
      $result = $conn->query($sql);
      $row = $result->num_rows;
      
      if($row === 1){
        echo json_encode($row);
      } else if($row === 0) {
        echo json_encode($row);
      }
    
  }
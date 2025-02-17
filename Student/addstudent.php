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
if (isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])) {
    $stuLogEmail = $_POST['stuLogEmail'];
    $stuLogPass  = $_POST['stuLogPass'];
    
    // Make sure the column names match your database table (e.g., stu_email, stu_password)
    $sql = "SELECT stu_email, stu_password FROM student 
            WHERE stu_email = '".$stuLogEmail."' AND stu_password = '".$stuLogPass."'";
    
    $result = $conn->query($sql);
    $row = $result->num_rows;
    
    // Return 1 if a match is found, or 0 if not.
    echo json_encode($row);
    exit();
}
?>
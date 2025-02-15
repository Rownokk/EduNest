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
?>
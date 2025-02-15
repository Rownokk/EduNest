<?php
include_once('../dbConnection.php');
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
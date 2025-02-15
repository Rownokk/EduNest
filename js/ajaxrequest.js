function addStu() {
      var stuname = $("#stuname").val();
      var stuemail = $("#stuemail").val();
      var stupassword = $("#stupassword").val();

      // checking Form Fields on Form Submission
      if(stuname.trim() == ""){
        $("#statusMsg1").html(
            '<small style="color:red";>Please Enter Name !</small>'
        );
        $("#stuname").focus();
        return false;
      }
      else if(stuemail.trim() == ""){
        $("#statusMsg2").html(
            '<small style="color:red";>Please Enter Email !</small>'
        );
        $("#stuemail").focus();
        return false;
      }
      else if(stupassword.trim() == ""){
        $("#statusMsg3").html(
            '<small style="color:red";>Please Enter Password !</small>'
        );
        $("#stupassword").focus();
        return false;
      }else{
        $.ajax({
            url:'Student/addstudent.php',
            method:'POST',
            dataType:"json",
            data:{
                stusignup: "stusignup",
                stuname : stuname,
                stuemail : stuemail,
                stupassword : stupassword,
    
            },
            success:function(data){
                console.log(data);
                if(data== "OK"){
                    $('#successMsg').html("<span class='alert alert-success'>Registration Successful !</span>");
    
                }else if (data == "Failed"){
                    $('#successMsg').html("<span class='alert alert-danger'>Unable to Register</span>");
      
                }
            },
          });
      }


    
}
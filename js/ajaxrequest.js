function addStu() {
      var stuname = $("#stuname").val();
      var stuemail = $("#stuemail").val();
      var stupassword = $("#stupassword").val();
      
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
                $('#successMsg').html("<span>Registration Successful !</span>");

            }else if (data == "Failed"){
                $('#successMsg').html("<span>Unable to Register</span>");
  
            }
        },
      });
}
$(document).ready(function (){
    $("#stuemail").on("keypress blur",function () {
        var reg = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
        var stuemail = $("#stuemail").val();
        $.ajax({
            url: "Student/addstudent.php",
            method: "POST",
            data: {
                checkemail: "checkmail",
                stuemail: stuemail,
            },
            success: function (data) {
                //console.log(data);
                if(data != 0){
                    $("#statusMsg2").html(
                '<small style="color:red;">Email Already Exists !</small>'
            );
             $("#signup").attr("disabled",true);
                }else if(data == 0 && reg.test(stuemail)){
                    $("#statusMsg2").html(
                        '<small style="color:green;">You Can Continue Now !</small>'
                    );
                     $("#signup").attr("disabled",false);  
                } else if(!reg.test(stuemail)){
                    $("#statusMsg2").html(
                        '<small style="color:red;">Please Enter Valid Email e.g. example@mail.com !</small>'
                    );
                     $("#signup").attr("disabled",false);
                }
                if(stuemail == ""){
                    $("#statusMsg2").html(
                        '<small style="color:red;">Please Enter Email !</small>'
                    );
                }
            },
        });
    });
});








function addStu() {
    var reg = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i; // Corrected Regex
    var stuname = $("#stuname").val().trim();
    var stuemail = $("#stuemail").val().trim();
    var stupassword = $("#stupassword").val().trim();

    // Checking Form Fields on Form Submission
    if (stuname == "") {
        $("#statusMsg1").html('<small style="color:red;">Please Enter Name!</small>');
        $("#stuname").focus();
        return false;
    } else if (stuemail == "") {
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email!</small>');
        $("#stuemail").focus();
        return false;
    } else if (!reg.test(stuemail)) { // Fixed email validation
        $("#statusMsg2").html('<small style="color:red;">Please Enter Valid Email e.g. example@mail.com</small>');
        $("#stuemail").focus();
        return false;
    } else if (stupassword == "") {
        $("#statusMsg3").html('<small style="color:red;">Please Enter Password!</small>');
        $("#stupassword").focus();
        return false;
    } else {
        $.ajax({
            url: 'Student/addstudent.php',
            method: 'POST',
            dataType: "json",
            data: {
                stusignup: "stusignup",
                stuname: stuname,
                stuemail: stuemail,
                stupassword: stupassword,
            },
            success: function (data) {
                console.log(data);
                if (data == "OK") {
                    $('#successMsg').html("<span class='alert alert-success'>Registration Successful!</span>");
                    clearStuRegField();
                } else if (data == "Failed") {
                    $('#successMsg').html("<span class='alert alert-danger'>Unable to Register</span>");
                }
            },
        });
    }
}

// Empty All Fields
function clearStuRegField() {
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html("");
    $("#statusMsg2").html("");
    $("#statusMsg3").html("");
}
function checkStuLogin() {
    // Get the values from the login form inputs
    var stuLogEmail = $("#stulogemail").val();
    var stuLogPass  = $("#stulogpassword").val();
    
    $.ajax({
      url: "Student/addstudent.php", // Make sure this path is correct
      type: "post",
      data: {
        checkLogemail: "checklogmail",
        stuLogEmail: stuLogEmail,
        stuLogPass: stuLogPass
      },
      success: function(data) {
        if (data == 0) {
            $("#statusLogMsg").html(
              '<small class="alert alert-danger"> Invalid Email ID or Password ! </small>'
            );
          } else if (data == 1) {
            $("#statusLogMsg").html(
              '<div class="spinner-border text-success" role="status"></div>'
            );
       }
      }
    });
  }
  

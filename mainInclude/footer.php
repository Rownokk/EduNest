<!-- Start Footer --> ;
<footer class="container-fluid bg-dark text-white text-center py-2" >
  <small class="text-white">Copyright &copy; 5055 || Designed By Edu-Learning || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalright">Admin Login</a></small>
</footer>
<!-- End Footer-->


<!-- Start Student registration Modal--> 


<!-- Modal -->
<div class="modal fade" id="stuRegModalright" tabindex="-1" aria-labelledby="stuRegModalrightLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="stuRegModalrightLabel">Student registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--start student registration form-->
      <form>
      <div class="form-group mb-3">
            <i class="fas fa-user"></i>
            <label for="stuname" class="p1-5 fw-bold">Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="stuname" id="stuname">
          </div>
          <div class="form-group mb-3">
            <i class="fas fa-envelope"></i>
            <label for="stuemail" class="p1-5 fw-bold">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="stuemail" id="stuemail">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group mb-3">
            <i class="fas fa-key"></i>
            <label for="stupassword" class="p1-5 fw-bold">New Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="stupassword" id="stupassword">
          </div>

</form>
<!--End student registration form-->
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
      <button type="button" class="btn btn-primary"
      onclick="addStu()">Sign Up</button>
      <button type="button" class="btn btn-secondary" 
      data-bs-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>
 <!-- End Student registration Modal--> 

 <!-- Start Student login Modal--> 


<!-- Modal -->
<div class="modal fade" id="stuLoginModalright" tabindex="-1" aria-labelledby="stuLoginModalrightLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="stuLoginModalrightLabel">Student login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--start student login form-->
      <form id="stuLoginForm">

          <div class="form-group mb-3">
            <i class="fas fa-envelope"></i>
            <label for="stulogemail" class="p1-5 fw-bold">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="stulogemail" id="stulogemail">
           
  </div>
  <div class="form-group mb-3">
            <i class="fas fa-key"></i>
            <label for="stulogpassword" class="p1-5 fw-bold"> Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="stulogpassword" id="stulogpassword">
          </div>

</form>
<!--End student login form-->
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
  
      </div>
    </div>
  </div>
</div>
 <!-- End Student login Modal--> 




<!-- Start Admin login Modal--> 


<!-- Modal -->
<div class="modal fade" id="adminLoginModalright" tabindex="-1" aria-labelledby="adminLoginModalrightLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="adminLoginModalrightLabel">Admin login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--start Admin login form-->
      <form id="adminLoginForm">

          <div class="form-group mb-3">
            <i class="fas fa-envelope"></i>
            <label for="adminlogemail" class="p1-5 fw-bold">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="adminlogemail" id="adminlogemail">
           
  </div>
  <div class="form-group mb-3">
            <i class="fas fa-key"></i>
            <label for="adminlogpassword" class="p1-5 fw-bold"> Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="adminlogpassword" id="adminlogpassword">
          </div>

</form>
<!--End Admin login form-->
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="adminLoginBtn">Admin Login</button>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
  
      </div>
    </div>
  </div>
</div>
 <!-- End Admin login Modal--> 



























    <!-- Bootstrap & Jquery JS -->
  <script src="js/jquery.min.js"></script>  
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <!-- Font Awesome JS -->
  <script src="js/all.min.js"></script>

  <!-- Student Testimonial Owl Slider JS -->
<script type="text/javascript" src="js/owl.min.js"></script> 
<script type="text/javascript" src="js/testyslider.js">
</script> 
  <!-- student Ajax Call JavaScript -->
  <script type="text/javascript" src="js/ajaxrequest.js"></script> 

</body>
</html>
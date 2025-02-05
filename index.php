<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
 
    
    <!-- Student Testimonial Owl Slider CSS --> 

<link rel="stylesheet" type="text/css" href="css/owl.min.css"> 
<link rel="stylesheet" type="text/css" href="css/owl.theme.min.css"> 

<link rel="stylesheet" type="text/css" href="css/testyslider.css"> 

<title>EduNest</title>
</head>
<body>


     <!-- Start Navigation -->
  
<nav class="navbar navbar-expand-sm navbar-dark ps-5 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">EduNest</a>
        <span class="navbar-text">Learn And Implement</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav ps-5">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Course</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Profile</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Login</a></li>
                <li class="nav-item custom-nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">Signup</a>
                </li> <!-- ✅ Fixed Closing Quote -->
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

      <!-- End Navigation -->
<!-- start video background -->
<div class="container-fluid remove-vid-marg ">
    <div class="vid-parent">
      <video playsinline autoplay muted loop>
        <source src="video/bg.mp4" type="video/mp4">
      </video>  
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
         <h1 class="my-content">Welcome to EDUNEST</h1>
         
         <small class="my-content my-5">Learn & implement</small>
                  <br>
                  <a href="#" class="btn btn-danger my-2" 
                  data-toggle="modal" data-target="#exampleModal">Get Started</a>
                 </div>
</div>

 <!-- end video bg -->

 <!-- text Banner -->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
             <div class="col-sm">
             <h5><i class="fas fa-book-open mr-3"></i>100+ online courses</h5>
             </div>
             <div class="col-sm">
             <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
             </div>
             <div class="col-sm">
             <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
             </div>
             <div class="col-sm">
             <h5><i class="fas fa-dollar-sign mr-3"></i>Money Back Guarntee</h5>
             </div>
        </div>

    </div>
 <!-- end Banner --> 
<!-- Start Most Popular Courses -->
<div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1>

  <!-- First Card Deck -->
  <div class="container mt-4">
    <div class="d-flex flex-wrap justify-content-center gap-3">
      
      <div class="card" style="width:25rem;">
        <img src="images/courseimg/ai.jpg" class="card-img-top" alt="Web Development">
        <div class="card-body">
          <h5 class="card-title">Master Web Development</h5>
          <p class="card-text">Learn HTML, CSS, JavaScript, and modern frameworks to build stunning websites.</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Price: <small><del>&#8377 5000</del></small> <span class="font-weight-bolder">&#8377 500</span></p>
          <a class="btn btn-primary text-white font-weight-bolder" href="#">Enroll</a>
        </div>
      </div>

      <div class="card" style="width:25rem;">
        <img src="images/courseimg/Guitar.jpg" class="card-img-top" alt="Graphic Design">
        <div class="card-body">
          <h5 class="card-title">Graphic Design Essentials</h5>
          <p class="card-text">Master Photoshop, Illustrator, and design principles to create stunning visuals.</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Price: <small><del>&#8377 4000</del></small> <span class="font-weight-bolder">&#8377 400</span></p>
          <a class="btn btn-primary text-white font-weight-bolder" href="#">Enroll</a>
        </div>
      </div>

      <div class="card" style="width:25rem;">
        <img src="images/courseimg/php.jpg" class="card-img-top" alt="Digital Marketing">
        <div class="card-body">
          <h5 class="card-title">Digital Marketing Mastery</h5>
          <p class="card-text">Learn SEO, social media marketing, and paid advertising to grow businesses online.</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Price: <small><del>&#8377 4500</del></small> <span class="font-weight-bolder">&#8377 450</span></p>
          <a class="btn btn-primary text-white font-weight-bolder" href="#">Enroll</a>
        </div>
      </div>

    </div>
  </div>

  <!-- Second Card Deck -->
  <div class="container mt-4">
    <div class="d-flex flex-wrap justify-content-center gap-3">
      
      <div class="card" style="width: 25rem;">
        <img src="images/courseimg/python.jpg" class="card-img-top" alt="Data Science">
        <div class="card-body">
          <h5 class="card-title">Data Science Bootcamp</h5>
          <p class="card-text">Learn Python, machine learning, and data visualization to become a data scientist.</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Price: <small><del>&#8377 6000</del></small> <span class="font-weight-bolder">&#8377 600</span></p>
          <a class="btn btn-primary text-white font-weight-bolder" href="#">Enroll</a>
        </div>
      </div>

      <div class="card" style="width: 25rem;">
        <img src="images/courseimg/Machine.jpg" class="card-img-top" alt="Mobile App Development">
        <div class="card-body">
          <h5 class="card-title">Mobile App Development</h5>
          <p class="card-text">Create Android and iOS apps using Flutter and React Native.</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Price: <small><del>&#8377 5500</del></small> <span class="font-weight-bolder">&#8377 550</span></p>
          <a class="btn btn-primary text-white font-weight-bolder" href="#">Enroll</a>
        </div>
      </div>

      <div class="card" style="width: 25rem;">
        <img src="images/courseimg/super-mario-2690254_1280.jpg" class="card-img-top" alt="Cyber Security">
        <div class="card-body">
          <h5 class="card-title">Cyber Security Fundamentals</h5>
          <p class="card-text">Learn ethical hacking, network security, and penetration testing.</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Price: <small><del>&#8377 5000</del></small> <span class="font-weight-bolder">&#8377 500</span></p>
          <a class="btn btn-primary text-white font-weight-bolder" href="#">Enroll</a>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- End Most Popular Courses -->


<div class="text-center m-2">
  <a class="btn btn-danger btn-sm" href="#">View All Course</a>
</div>


<!--End most popular course-->
<!-- Start Contact Us --> 
<div class="container mt-4" id="Contact"> <!--Start Contact 
Us Container--> 
<h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us 
Heading --> 
<div class="row"> <!--Start Contact Us Row--> 
<div class="col-md-8"> <!--Start Contact Us 1st Columns--> 
<form action="" method="post"> 
<input type="text" class="form-control" name="name" 
placeholder="Name"><br> 
<input type="text" class="form-control" name="subject" 
placeholder="Subject"><br> 
<input type="email" class="form-control" name="email" 
placeholder="E-mail"><br> 
<textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px; 
"></textarea><br> 
<input class="btn btn-primary" type="submit" 
value="Send" name="submit"><br><br> 
</form> 
</div> <!-- End Contact Us 1st Column--> 
<div class="col-md-4 stripe text-white text-center"> <!--
Start Contact Us 2nd Column--> 
<h4>EduNest</h4> 
<p>EduNest,  
Banani, Dhaka 1213, Bangladesh <br />  
Phone: +880 1700000000 <br />  
www.edunest.com </p>
 
</div> <!-- End Contact Us 2nd Column--> 
</div> <!-- End Contact Us Row--> 

</div> <!-- End Contact Us Container--> 






<!-- End Contact Us --> 

<!-- Start Students Testimonial --> 

<div class="container-fluid mt-5 py-5" style="background-color: #487289;" id="feedback">
    <h1 class="text-center text-white fw-bold mb-4">Student's Feedback</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial text-center p-4 bg-white shadow rounded">
                    <p class="description text-dark fw-normal mb-3"> 
                        "For me, this is the best e-learning website."
                    </p>
                    <div class="pic mb-3">
                        <img src="images/stu/Rownok.jpg" alt="Rownok" class="rounded-circle img-fluid" width="90">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="fw-semibold text-primary mb-1">Rownok</h4>
                        <small class="text-muted">Web Developer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End Stuents Testimonial --> 

<div class="container-fluid py-1" style="background-color:darkcyan ;">
    <div class="text-center">
        <h5 class="text-white fw-bold mb-3">Stay Connected With Us</h5>
        <div class="d-flex justify-content-center gap-4">
            <a class="social-icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="social-icon twitter" href="#"><i class="fab fa-twitter"></i></a>
            <a class="social-icon whatsapp" href="#"><i class="fab fa-whatsapp"></i></a>
            <a class="social-icon instagram" href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>

<style>
    .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 55px;
        height: 55px;
        font-size: 24px;
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
    }

    .facebook { background-color: #1877F2; }
    .twitter { background-color: #1DA1F2; }
    .whatsapp { background-color: #25D366; }
    .instagram { background: linear-gradient(45deg, #E4405F, #F77737); }

    .social-icon:hover {
        transform: scale(1.1);
        box-shadow: 0px 4px 15px rgba(255, 255, 255, 0.3);
    }
</style>

<!-- End Social Follow --> 



<!-- Start About Section --> 
<div class="container-fluid p-5" style="background-color: #E9ECEF ;">
    <div class="container">
        <div class="row text-center row-cols-1 row-cols-md-3 gy-4">
            <!-- About Us -->
            <div class="col">
                <h5 class="fw-bold">About Us</h5>
                <p class="text-muted">
                    EduNest provides universal access to world-class education, partnering with top universities and organizations to offer online courses.
                </p>
            </div>

            <!-- Categories -->
            <div class="col">
                <h5 class="fw-bold">Categories</h5>
                <ul class="list-unstyled">
                    <li><a class="category-link text-decoration-none text-muted" href="#">Web Development</a></li>
                    <li><a class="category-link text-decoration-none text-muted" href="#">Web Designing</a></li>
                    <li><a class="category-link text-decoration-none text-muted" href="#">Android App Dev</a></li>
                    <li><a class="category-link text-decoration-none text-muted" href="#">iOS Development</a></li>
                    <li><a class="category-link text-decoration-none text-muted" href="#">Data Analysis</a></li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div class="col">
                <h5 class="fw-bold">Contact Us</h5>
                <p class="text-muted">
                    <i class="fas fa-building"></i> EduNest Pvt Ltd <br>
                    <i class="fas fa-map-marker-alt"></i> 12/A Dhanmondi Road, Dhaka, Bangladesh <br>
                    <i class="fas fa-phone"></i> Ph. 01700000000
                </p>
            </div>
        </div>
    </div>
</div>



<!-- Start Footer --> 


<footer class="container-fluid bg-dark text-center p-2"> 
<small class="text-white">Copyright &copy; 2025 || Designed By Edu-Learning || Admin Login</small> 
</footer> 
<!-- End Footer--> 


<!-- Start Student Registration Modal--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 4.5 Modal Fix</title>
    
    <!-- Bootstrap 4.5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- Start student registration form -->

  <form>
    <div class="form-group">
      <i class="fas fa-user"></i>
      <label for="stuname" class="p-1 font-weight-bold">Name</label>
      <input class="form-control" placeholder="Name" name="stuname" id="stuname" type="text">
    </div>

    <div class="form-group">
      <i class="fas fa-envelope"></i>
      <label for="stuemail" class="p-1 font-weight-bold">Email</label>
      <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
      <small class="form-text">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
  <i class="fas fa-key"></i>
  <label for="stupass" class="p-1 font-weight-bold">New Password</label>
  <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">


</div>
<form>
  <!-- End student registration form -->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" >Sign up</button>
        <button type="button" class="btn btn-secondary"
        data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap & jQuery Scripts (Load jQuery first, then Bootstrap JS) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- End Student Registration Modal-->










</div> <!-- End About Section -->

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

</body>
</html>
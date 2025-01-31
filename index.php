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
    <title>EduNest</title>
    
</head>
<body>
     <!-- Start Navigation -->
     <nav class="navbar navbar-expand-sm navbar-dark  ps-5 fixed-top">
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
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Signup</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">logout</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">FeedBack</a></li>
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
         <a href="#"class="btn btn-danger my-2">Get Started</a>
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

    <!-- Bootstrap & Jquery JS -->
  <script src="js/jquery.min.js"></script>  
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Font Awesome JS -->
  <script src="js/all.min.js"></script>
</body>
</html>
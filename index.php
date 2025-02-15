  <!--start including header-->
  <?php
include('./mainInclude/header.php');
?>
  <!--end including header-->
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
                  <a href="#" class="btn btn-danger my-3" 
                  data-bs-toggle="modal" data-bs-target="#stuRegModalright">Get Started</a>
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
<!--first card deck -->
  <div class="container mt-4">
    <div class="row g-4">  
        <div class="col-md-4">
            <div class="card">
                <img src="images/courseimg/ai.jpg" class="card-img-top" alt="Web Development">
                <div class="card-body">
                    <h5 class="card-title">Master Web Development</h5>
                    <p class="card-text">Learn HTML, CSS, JavaScript, and modern frameworks.</p>
                </div>
             <div class="card-footer d-flex justify-content-between align-items-center">

                    <p><small><del>&#8377 5000</del></small> <span class="fw-bolder">&#8377 500</span></p>
                    <a class="btn btn-primary text-white fw-bolder" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/courseimg/Guitar.jpg" class="card-img-top" alt="Graphic Design">
                <div class="card-body">
                    <h5 class="card-title">Graphic Design Essentials</h5>
                    <p class="card-text">Master Photoshop, Illustrator,Canva,Figma and design principles.</p>
                </div>
             <div class="card-footer d-flex justify-content-between align-items-center">

                    <p><small><del>&#8377 4000</del></small> <span class="fw-bolder">&#8377 400</span></p>
                    <a class="btn btn-primary text-white fw-bolder" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/courseimg/php.jpg" class="card-img-top" alt="Digital Marketing">
                <div class="card-body">
                    <h5 class="card-title">Digital Marketing Mastery</h5>
                    <p class="card-text">Learn SEO, social media marketing, and paid advertising.</p>
                </div>
             <div class="card-footer d-flex justify-content-between align-items-center">

                    <p><small><del>&#8377 4500</del></small> <span class="fw-bolder">&#8377 450</span></p>
                    <a class="btn btn-primary text-white fw-bolder" href="#">Enroll</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row g-4">  
        <div class="col-md-4">
            <div class="card">
                <img src="images/courseimg/python.jpg" class="card-img-top" alt="Data Science">
                <div class="card-body">
                    <h5 class="card-title">Data Science Bootcamp</h5>
                    <p class="card-text">Learn Python, machine learning, and data visualization.</p>
                </div>
             <div class="card-footer d-flex justify-content-between align-items-center">

                    <p><small><del>&#8377 6000</del></small> <span class="fw-bolder">&#8377 600</span></p>
                    <a class="btn btn-primary text-white fw-bolder" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/courseimg/Machine.jpg" class="card-img-top" alt="Mobile App Development">
                <div class="card-body">
                    <h5 class="card-title">Mobile App Development</h5>
                    <p class="card-text">Create Android and iOS apps using Flutter and React Native.</p>
                </div>
             <div class="card-footer d-flex justify-content-between align-items-center">

                    <p><small><del>&#8377 5500</del></small> <span class="fw-bolder">&#8377 550</span></p>
                    <a class="btn btn-primary text-white fw-bolder" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/courseimg/angular.jpg" class="card-img-top" alt="Cyber Security">
                <div class="card-body">
                    <h5 class="card-title">Cyber Security Fundamentals</h5>
                    <p class="card-text">Learn ethical hacking, network security, and penetration testing.</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">

                    <p><small><del>&#8377 5000</del></small> <span class="fw-bolder">&#8377 500</span></p>
                    <a class="btn btn-primary text-white fw-bolder" href="#">Enroll</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End Most Popular Courses -->


<div class="text-center m-5">
  <a class="btn btn-danger btn-sm" href="#">View All Course</a>
</div>


<!--End most popular course-->
<!-- Start Contact Us --> 

<?php

include('./contact.php');

?>
<!-- End Contact Us --> 

<!-- Start Students Testimonial --> 

<div class="container-fluid mt-5 py-5" style="background-color: #487589;" id="feedback">
    <h1 class="text-left text-white fw-bold mb-4">Student's Feedback</h1>
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial text-left p-4 bg-white shadow rounded">
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

<div class="container-fluid py-4 text-center" style="background-color: #005f73;">
    <h5 class="text-white fw-bold mb-3">Stay Connected With Us</h5>
    <div class="d-flex justify-content-center gap-3">
        <a class="social-icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
        <a class="social-icon twitter" href="#"><i class="fab fa-twitter"></i></a>
        <a class="social-icon whatsapp" href="#"><i class="fab fa-whatsapp"></i></a>
        <a class="social-icon instagram" href="#"><i class="fab fa-instagram"></i></a>
    </div>
</div>

<style>
    .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        font-size: 24px;
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .facebook { background-color: #1877F5; }
    .twitter { background-color: #1DA1F2; }
    .whatsapp { background-color: #25D366; }
    .instagram { background: linear-gradient(45deg, #E4405F, #F77737); }

    .social-icon:hover {
        transform: scale(1.1);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
    }
</style>
<!-- End Social Follow -->

<!-- Start About Section --> 
<div class="container-fluid p-5" style="background-color: #E9ECEF ;">
    <div class="container">
        <div class="row text-left row-cols-1 row-cols-md-3 gy-4">
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
                    <i class="fas fa-map-marker-alt"></i> 15/A Dhanmondi Road, Dhaka, Bangladesh <br>
                    <i class="fas fa-phone"></i> Ph. 01700000000
                </p>
            </div>
        </div>
    </div>
</div>

</div> <!-- End About Section -->
  <!--start including footer-->
<?php
include('./mainInclude/footer.php');
?>
  <!--end including footer-->
  <!--start including header-->
  <?php
include('./mainInclude/header.php');
?>
  <!--end including header-->
 <!-- Start Course Page Banner --> 

 <div class="container-fluid bg-dark"> 
 <div class="row"> 

<img src="./images/coursebanner.jpg" alt="courses" 
style="height:300px; width:100%; object-fit:cover; box-shadow:10px;"/> 
 </div> 
 </div> 
 <!-- End Course Page Banner--> 
<!-- Start Main Content -->
<div class="container">
  <h2 class="text-center my-4">Payment Status</h2>
  <form method="post" action="">
    <div class="form-group row justify-content-center">
      <label class="col-sm-1 col-form-label">Order ID:</label>
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="">
      </div>
      <div class="col-md-2">
        <input type="submit" class="btn btn-primary btn-block" value="View">
      </div>
    </div>
  </form>
</div>
<!-- End Main Content -->









<!-- Start Contact Us --> 

<?php

include('./contact.php');

?>
<!-- End Contact Us --> 


</div>
<!-- end contact us-->

  <!--start including footer-->
  <?php
include('./mainInclude/footer.php');
?>
  <!--end including footer-->
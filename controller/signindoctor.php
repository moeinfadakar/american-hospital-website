<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../view/style/style.css">

</head>
<?php session_start(); ?>
<div class="container">
<div class="row mb-4 pb-4" style="border-bottom:1px solid black ">

    <div class="col-12">



  <?php  if(isset($_SESSION["success_doctor_patients_register"] )): ?>
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
<?php echo  $_SESSION["success_doctor_patients_register"] ; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset($_SESSION["success_doctor_patients_register"] ); ?>
  <?php endif ?>

  <?php  if(isset($_SESSION["username_doctor_exit"] )): ?>
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
<?php echo  $_SESSION["username_doctor_exit"] ; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset($_SESSION["username_doctor_exit"] ); ?>
  <?php endif ?>

  <?php  if(isset($_SESSION["Character_error_doctor"] )): ?>
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
<?php echo  $_SESSION["Character_error_doctor"] ; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset($_SESSION["Character_error_doctor"] ); ?>
  <?php endif ?>




        <div class="row text-center">
<h2>WELCOME TO THE AMERICAN HOSPITAL OF PARIS</h2>

        </div></div>
        <br><br>
    </div>

<div class="doctor__wrapper" id="doctor__form" " >
<div class="row" >
<h3 class="text-center">Sign In Doctor</h3>
    <div class="col-6" >
<div class="row p-3">

<form action="./DoctorSignInProcess.php" method="post">
<div class="row p-3 focus-ring-light">
<div class="form-floating mb-3 focus-ring-light">
  <input type="text" class="form-control focus-ring-light"  name="Username" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Username</label>
</div>
</div>

<div class="row p-3 focus-ring-light">
<div class="form-floating mb-3 focus-ring-light">
  <input type="password" class="form-control focus-ring-light"  name="password" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Password</label>
</div>
</div>

<div class="row p-3 focus-ring-light">
<button type="submit" class="btn btn-dark">submit</button>
</div>

</form>



</div>  </div>
    <div class="col-6"><img class="rounded-3" src="../image&sources/left.png" style="width: 100%;"  alt=""></div>

  
</div>

</div>


</div>
<script src="../view/js/script.js"></script>
<script src="../bootstrap/bootstrap.bundle.js"></script>
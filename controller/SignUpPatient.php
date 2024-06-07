<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../view/style/style.css">

</head>
<?php session_start(); ?>
<div class="container">
<div class="row mb-4 pb-4" style="border-bottom:1px solid black ">

    <div class="col-12">
      <?php if(isset($_SESSION["Character_error"])): ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p><?php echo $_SESSION["Character_error"] ?></p>        
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php unset($_SESSION["Character_error"] ) ?>
        <?php elseif( isset($_SESSION["username"])): ?>

          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <p><?php echo  $_SESSION["username"]; ?></p> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset($_SESSION["username"] ) ?>
          <?php endif; ?>
    </div>
        <br><br>
<div class="row">
</div>
    </div>
<div class="doctor__wrapper px-5" id="doctor__form" >
<div class="row" >
<h3 class="text-center">Sign Up Patient</h3>
    <div class="col-6" >
<div class="row p-3">
  <!-- form is here -->
<form action="../controller/patientSignUpProcess.php"  method="POST">
<div class="row p-3 focus-ring-light">
<div class="form-floating mb-3 focus-ring-light">
  <input type="text" class="form-control focus-ring-light" name="PATIENT_NAME" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Full Name</label>
</div>
</div>


<div class="row p-3 focus-ring-light">
<div class="form-floating mb-3 focus-ring-light">
  <input type="text" class="form-control focus-ring-light" name="USERNAME_PATIENT" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Username</label>
</div>
</div>

<div class="row p-3 focus-ring-light">
<div class="form-floating mb-3 focus-ring-light">
  <input type="password" class="form-control focus-ring-light" name="PASSWORD_PATIENT" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Password</label>
</div>
</div>

<div class="row p-3 focus-ring-light">
<div class="form-floating mb-3 focus-ring-light">
  <input type="text" class="form-control focus-ring-light" name="NUMBER_PATIENT" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Number</label>
</div>
</div>

<div class="row p-3 focus-ring-light">
<div class="form-floating mb-3 focus-ring-light">
  <input type="text" class="form-control focus-ring-light" name="AGE_PATIENT" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Age</label>
</div>
</div>

<select class="form-select" aria-label="Default select example" name="GENDER_PATIENT">
  <option selected>select your gender</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
  <option value="3">i rather to dont say</option>
</select>

<div class="row p-3 focus-ring-light">
<button type="submit" class="btn btn-dark">submit</button>
</div>
</form>
</div>  </div>
    <div class="col-6"><img class="rounded-3" src="../image&sources/mother.jpg" style="width: 100%;"  alt=""></div>

  
</div>

</div>


</div>















</div>

<script src="../view/js/script.js"></script>
<script src="../bootstrap/bootstrap.bundle.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this is a hospital website">
    <meta name="author" content="moein fadakar">
    <meta name="keywords" content="hospital , doctor , nurse">
    <link rel="stylesheet" href="view/style/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.rtl.css">
    <title>Header of Hospital project</title>
</head>
<body>
    <div class="container-fluid wrapper" >
        <div class="row">
<div class="col-12 header pt-3">
    <nav class="navbar navbar-expand-lg bg-body-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link first" href="controller/SignUpDoctor.php">Register Doctor</a>
        <a class="nav-link first" href="controller/SignUpPatient.php">Register Patient</a>
        <a class="nav-link first" href="">persian version</a>
        <a class="nav-link btn__link1"  href="controller/signindoctor.php">Sign In Doctor</a>
        <a class="nav-link btn__link2"  href="controller/SignInpatients.php">Sign In Patients</a>
      </div>
    </div>
  </div>
</nav>
</div>
        </div>
        <div class="row">
            <div class="col-4" style="display: flex; justify-content: center; padding: .5rem;"><img src="image&sources/textpic.png" width="80" alt="" style=" width: 60%;"></div>
            <div class="col-8">
                <nav class="navbar navbar-expand-lg bg-body-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="    display: flex;
    justify-content: center;">
      <div class="navbar-nav">
        <a class="nav-link sec" >Patient & Visitor Information</a>
        <a class="nav-link sec" href="#">Our Departments</a>
        <a class="nav-link sec" href="#">About Us</a>
        <button  class="nav-link" onclick="searchSide()" id="side"  style="margin-inline-start: 50px;" href="#"><svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="30" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path  stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
</svg>
</button>
      
      </div>
    </div>
  </div>
</nav>
</div>
        </div>
<div  id="search__bar">
  <div class="row">
    <div class="col-2"></div>
<div class="col-2 d-flex justify-content-end align-items-start"><button type="button" class="btn btn-info text-white "><svg width="50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
</svg>
</button></div>
    <div class="col-6">
      <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Search Here</label>
</div>
    </div>
<div class="col-2"></div>
  </div>



</div>




        <div class="row header__charity">
            <div class="col-2"><img src="image&sources/glory.png" class="charity__img" width="100" alt="helping to each other"></div>
            <div class="col-5 text__wrapper" ><p>Support your Hospital and enjoy exclusive advantages</p></div>
            <div class="col-3 link__wrapper"><a href="#">Become a member</a></div>
            <div class="col-2"></div>
        </div>
    </div>
    <script> 
</script>
    <script src="view/js/script.js"></script>
<script src="bootstrap/bootstrap.bundle.js"></script>

</body>
</html>
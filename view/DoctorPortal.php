<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../view/style/style.css">
</head>

<body class="" style="background-color:#013a5d;color:white">
<?php if(isset($_SESSION["success_ful"])): ?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <p><?php echo $_SESSION["success_ful"]; ?></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

  <?php unset($_SESSION["success_ful"]); ?>
<?php endif;  ?>
    <div class="container-fluid">
        <div class="row">
              <div class="col-3 h-100 bg-white text-end">
              <h5 class="text-center text-danger pt-2"> Dr . <?php echo $name ?></h5>
    <ul class="list-group list-group-flush w-100 p-0 ">
  <li  id="sev" onclick="MyPatient()" class="list-group-item w-100" style="cursor: pointer;"  >My patient</li>
  <li  id="MySev" onclick="MyServe()" class="list-group-item" style="cursor: pointer;" >My Serve</li>
  <li class="list-group-item"> <a href="./add_new_treatments.php?id=<?php echo $ID; ?>" style="cursor: pointer;"   class="text-decoration-none text-dark">add a new serve</a> </li>
  <li  id="MyInfo" onclick="myInformation()" class="list-group-item" style="cursor: pointer;" >my information</li>
  <li   class="list-group-item"><a href="../controller/exitDoctor.php" class="text-decoration-none text-dark ">exit</a></li>
</ul>
    </div>
    <div class="col-9 p-3">
<div id="table__wrapper">
    <div class="row">
        <h3 class="text-center">My Patients List</h3>
    </div>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">patient Id</th>
      <th scope="col">	treatment	</th>
      <th scope="col">	Reserve	Time</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($TimeHaveReserved as $RT): ?>
    <tr>
      <th scope="row"><?php echo $RT["id"] ?></th>
      <td><?php echo $RT["time"]; ?></td>
      <td><?php echo $RT["DoctorName"]; ?></td>
      <td><?php echo $RT["day"]; ?></td>
      <td><?php echo $RT["time"]; ?></td>
    </tr>
    <?php endforeach; ?>
  
   
  </tbody>
</table>
</div>
  
<div id="new__treatment__wrapper">
    <div class="row">
    <h3 class="text-center"> Treatments</h3>
</div>
    <form action="" method="post">
<div class="row ">

<div class="col-12">
  





</div>
</div>


<div class="card">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">treatment</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    
    </tr>
  </thead>
  <tbody>
<?php foreach($Doctors_serves as $DT): ?> 
    <tr>
      <th scope="row"><?php echo $DT["id"] ?></th>
      <td><?php echo $DT["DoctorName"]; ?></td>
      <td><?php echo $DT["treatment"]; ?></td>
      <td><a href="../controller/editdoctorservescontroller.php?id=<?php echo $DT["id"] ?>">Edit</a></td>
      <td><a href="../controller/Delete_serve.php?id=<?php echo $DT["id"] ?>">Delete</a></td>
   
    </tr>
    <tr>
<?php endforeach; ?>
  </tbody>
</table>
<div class="row d-flex justify-content-center align-items-center mt-3 mb-4">
  <div class="col-12 justify-content-center align-items-center d-flex">
    
  </div>
 
</div>
</div>



    </form>

</div>

<!-- my treatments -->
<?php if(isset($_SESSION["PASSWORD_ARE_NOT_MATCH"] )): ?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <p><?php echo $_SESSION["PASSWORD_ARE_NOT_MATCH"]; ?></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php unset($_SESSION["PASSWORD_ARE_NOT_MATCH"] ) ?>
<?php endif; ?>
<!-- add a new serve? -->
<div id="my__information__wrapper">
   <div class="row"><h3 class="text-center">your information</h3></div>
<div class="row p-5">

<div class="card">
<?php  foreach($doctorPersonal_information as $PI): ?>
  
<div class="row">
    <div class="col-6">
         <div class="card-body">
name:  <?php echo $PI["name"] ?>
 </div> 
    </div>
    <div class="col-6">
    <div class="card-body">
    specialty : <?php echo $PI["specialty"] ?>
</div> 
    </div>
</div>
<div class="row">
    <div class="col-6">
         <div class="card-body">
Username: <?php echo $PI["Username"] ?>
 </div> 
    </div>
    <div class="col-6">
    <div class="card-body">
    Age: <?php echo $PI["Age"] ?>
</div> 
    </div>
</div>
<div class="row">
    <div class="col-6">
         <div class="card-body">
number: <?php echo $PI["Number"] ?>
 </div> 
    </div>
    <div class="col-6">
      <a href="../controller/ChangeDoctorPI.php?id=<?php echo $ID; ?>" class="text-decoration-none"><button type="button" class="btn btn-dark">Change</button></a>
    </div>
</div>
<?php endforeach; ?>
</div>
</div> </div>
</div>
<!-- my information -->










    </div>
        </div>
  
</div>
<script  src="../bootstrap/bootstrap.bundle.js"></script>
<script src="../view/js/script.js"></script>
</body>

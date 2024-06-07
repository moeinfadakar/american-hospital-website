

<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../view/style/style.css">
</head>
<body class="text-white" id="body" style="background-color:#013a5d">
    <div class="container-fluid ">
        <div class="row">
              <div class="col-3 h-100 bg-white text-end">
                <h5 class="text-center text-dark"> patient name: <?php echo $name["Name"]; ?></h5>
    <ul class="list-group list-group-flush w-100 p-0 ">
  <li id="sev" onclick="MyPatient()" class="list-group-item w-100 cursor-pointer " style="cursor:pointer">the Hospital Services</li>
  <li id="MySev" onclick="MyServe()" class="list-group-item cursor-pointer " style="cursor: pointer;" >My Reserved Services </li>
  <li  id="MyInfo" onclick="myInformation()" class="list-group-item cursor-pointer " style="cursor: pointer;" >My Informations</li>
  <li   class="list-group-item cursor-pointer "><a  class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="../controller/exitPatient.php">exit</a></li>
</ul>
    </div>
    <div class="col-9 p-5">
      <?php if(isset($_SESSION["DONT_HAVE_TIME"])): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
<p><?php echo $_SESSION["DONT_HAVE_TIME"] ?></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php unset($_SESSION["DONT_HAVE_TIME"]); ?>
        <?php endif ?>
<div id="table__wrapper">
    <div class="row">
        <h3 class="text-center">The Serves List</h3>
    </div>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">code</th>
      <th scope="col">Serve Name</th>
      <th scope="col">	Doctor Name</th>
      <th scope="col">	Select day</th>
      <th scope="col">	Select Time </th>
      <th scope="col">	Reserve</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($services as $service) : ?>
      <form action="../controller/reserveTreatmentsprocess.php" method="post">
    <tr>
      <th scope="row"><?php echo $service["id"]; ?></th>
      <td><?php echo $service["treatment"]; ?> </td>
      <input type="hidden" value="<?php echo $service["treatment"]; ?>" name="TreatmentNAME" >
      <td><?php echo $service["DoctorName"]; ?></td> 
           <td> <input type="date" name="ServiceDAY" id="date" required>
          <h6 id="dateError"></h6>
          </td> 

           <td> <input type="time" name="ServiceTIME" id="time" required>
          <h6 id="timeError"></h6>
          </td> 
    <input type="hidden" name="ServiceID" value="<?php echo $service["id"]; ?>"  required>
            <input type="hidden" name="PatientID" value="<?php echo $ID; ?>"  required>
       <input type="hidden" name="DoctorID" value="<?php echo $service["Doctor_Id"] ?>"  required>
       <input type="hidden" name="DoctorNAME" value="<?php echo $service["DoctorName"] ?>"  required>

    
<td><button type="submit" onclick="redBorder()" class="btn btn-outline-danger">Reserve it</button></td>
    </tr>



      </form>

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
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Treatment</th>
      <th scope="col">Day</th>
      <th scope="col">Time</th>
      <th scope="col">Cancel</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($patientsTime as $pt ): ?>
    <tr>
      <th scope="row"></th>
      <td><?php echo $pt["DoctorName"] ?></td>
      <td><?php echo $pt["treatment"] ?></td>
      <td><?php echo $pt["day"] ?></td>
      <td><?php echo $pt["time"] ?></td>
      <td><a href="../controller/cancelpatient.php?id=<?php echo $pt["serve_id"] ?>" class="text-decoration-none"><button type="button" class="btn btn-danger">X</button></a></td>
    </tr>
    <tr>
    <?php endforeach; ?>
  </tbody>
</table>


</div>




    </form>

</div>
</div>
<!-- my treatments -->




<!-- add a new serve? -->


<div id="my__information__wrapper">
<?php if(isset( $_SESSION["NotEnoughCharacter"] )): ?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
<p><?php echo $_SESSION["NotEnoughCharacter"]; ?></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php  unset($_SESSION["NotEnoughCharacter"]); ?>
<?php elseif(isset($_SESSION["NotMatchPassword"])): ?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
<p><?php echo $_SESSION["NotMatchPassword"]; ?></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php unset($_SESSION["NotMatchPassword"]); ?>
<?php endif; ?>

   <div class="row"><h3 class="text-center">your information</h3></div>
<div class="row">
<div class="card">

  <?php   foreach($PIs as $Pi): ?>
<div class="row">
    <div class="col-6">
         <div class="card-body">
name: <?php echo $Pi["Name"] ?>
 </div> 
    </div>
    <div class="col-6">
    <div class="card-body">
   Username:  <?php echo $Pi["Patients_user"] ?>
</div> 
    </div>
</div>
<div class="row">
    <div class="col-6">
         <div class="card-body">
   Age: <?php echo $Pi["Age"] ?>
 </div> 
    </div>
    <div class="col-6">
    <div class="card-body">
 number: <?php echo $Pi["Number"] ?>
</div> 
    </div>
</div>
<div class="row">
    <div class="col-12">
    <div class="card-body">
    <p><a href="../controller/changePIpatients.php?id=<?php  echo $ID ?>" class="link-dark fs-3 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><button class="btn btn-warning"><p class="m-0">Change</p></button></a></p>
</div> 
    </div>
</div>
<?php endforeach; ?>

</div>
</div> 
</div>
<!-- my information -->










    </div>
        </div>
  
</div>
<script>

let dateError = document.getElementById("dateError");
let timeError = document.getElementById("timeError");

function redBorder(){
    date.style.borderColor = "red";
    time.style.borderColor  ="red";

dateError.innerHTML = "please fill out this filed"
timeError.innerHTML = "please fill out this filed"
timeError.style.color = "red"
dateError.style.color = "red"

}

</script>


<script src="../view/js/script.js"></script>
<script src="../bootstrap/bootstrap.bundle.js"></script>
</body>

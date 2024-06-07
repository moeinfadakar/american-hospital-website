<?php

include"../model/database.php";


$id =  $_GET["id"];

 $doctorName =  $db->query("SELECT * FROM doctors WHERE id = $id ");
$name = $doctorName->fetch_assoc();


?>



<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../view/style/style.css">
</head>
<div class="container">
    <div class="col-6">
        <form action="./doctorservsprocess.php" method="post">
       <input type="hidden" name="id" value="<?php echo $id; ?>"> 
       <input type="hidden" name="name" value="<?php echo $name["name"]; ?>"> 
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Treatment</label>
  <input type="text" class="form-control" name="Treatment" id="exampleFormControlInput1" placeholder="new treatments">
</div>
<button type="submit" class="btn btn-danger">submit</button>    
        </form>
    </div>
</div>








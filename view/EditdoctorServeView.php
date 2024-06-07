


<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../view/style/style.css">
</head>
<div class="container">
    <div class="col-6">
        <form action="../controller/editdoctortreatmentsprocess.php" method="post">
       <input type="text" name="id_treatments" value="<?php echo $id; ?>"> 
       <input type="text" name="name" value="<?php echo $treatmentNAME["DoctorName"]; ?>"> 
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Treatment</label>
  <input type="text" class="form-control" value="<?php echo $treatmentNAME["treatment"]; ?>" name="Treatment" id="exampleFormControlInput1" placeholder="new treatments">
</div>
<button type="submit" class="btn btn-danger">submit</button>    
        </form>
    </div>
</div>





<head>
<link rel="stylesheet" href="../bootstrap/bootstrap.rtl.css">
    <link rel="stylesheet" href="../view/style/style.css">
</head>
<div class="container">
    <form action="../controller/changePIpatientProcess.php" method="post">
<input type="hidden" value="<?php echo $ID; ?>" name="Karbar">
    <div class="row">
        <?php foreach($PIs as $PI): ?>
<div class="col-6"><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" name="name" value="<?php echo $PI["Name"]; ?>"   id="exampleFormControlInput1" placeholder="name@example.com">
</div></div>
<div class="col-6"><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control"name="username" value="<?php echo $PI["Patients_user"]; ?>"  id="exampleFormControlInput1" placeholder="name@example.com">
</div></div>
    </div>
    <div class="row">
<div class="col-6"><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">New Password</label>
  <input type="text" class="form-control"name="newPassword"  id="exampleFormControlInput1" placeholder="name@example.com">
</div></div>
<div class="col-6"><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Repeat new Password</label>
  <input type="text" class="form-control" name="RepeatNewPassword"  id="exampleFormControlInput1" placeholder="name@example.com">
</div></div>
    </div>
    <div class="row">
<div class="col-6"><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Age</label>
  <input type="text" class="form-control"name="Age" value="<?php echo $PI["Age"]; ?>"  id="exampleFormControlInput1" placeholder="name@example.com">
</div></div>
<div class="col-6"><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Number</label>
  <input type="text" class="form-control"name="Number" value="<?php echo $PI["Number"]; ?>"  id="exampleFormControlInput1" placeholder="name@example.com">
</div></div>
    </div>
    <?php endforeach; ?>
<div class="row">

<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Gender">
  <option selected>Select a gender</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
  <option value="3">I Rather to dont say</option>
</select>

</div>
<div class="row">
<div class="col-12">
<button type="submit" class="btn btn-primary">submit</button>
</div>
</div>
    </form>




</div>
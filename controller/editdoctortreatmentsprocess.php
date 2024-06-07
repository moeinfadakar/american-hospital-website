<?php

include"../model/database.php";


$ID = $_POST["id_treatments"];
$doctorNAME = $_POST["name"];
$TreatmentNAME = $_POST["Treatment"];

$the_insert =  $db->query("UPDATE servs SET treatment = '$TreatmentNAME'  , DoctorName = '$doctorNAME'  WHERE  id = '$ID' ");

header("location:  ./DoctorPortalController.php");


?>
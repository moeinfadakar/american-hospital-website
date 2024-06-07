<?php

include"../model/database.php";


$DoctorID = $_POST["id"];
$doctorNAME = $_POST["name"];
$TreatmentNAME = $_POST["Treatment"];

$the_insert =  $db->query("INSERT INTO servs(Doctor_Id,treatment,DoctorName)  VALUE( '$DoctorID' , '$TreatmentNAME' ,'$doctorNAME' ) ");

header("location:  ./DoctorPortalController.php");


?>
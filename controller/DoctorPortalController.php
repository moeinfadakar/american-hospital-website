<?php

include"../model/database.php";

session_start();

$ID = $_SESSION["D_id"];



$doctorPersonal_information = $db->query("SELECT * FROM doctors WHERE id = $ID ");
$Doctors_serves = $db->query("SELECT * FROM servs WHERE Doctor_Id =  $ID ");
$TimeHaveReserved = $db->query("SELECT * FROM timing WHERE  doctor_id = $ID ");

$doctorName = $doctorPersonal_information->fetch_assoc();
$name = $doctorName["name"];






require"../view/DoctorPortal.php";


?>
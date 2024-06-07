<?php

include"../model/database.php";

session_start();


$ID = $_SESSION["USER_ID"] ;





$services = $db->query("SELECT * FROM servs ");
$PIs = $db->query("SELECT * FROM patients WHERE id = $ID ");
$patientsTime = $db->query("SELECT * FROM timing WHERE patient_id = $ID ");


$name = $PIs->fetch_assoc();







require"../view/PatientPortal.php";


?>
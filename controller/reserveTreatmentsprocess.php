<?php

include "../model/database.php";

session_start();


$ServiceDAY = $_POST["ServiceDAY"];
$ServiceTIME = $_POST["ServiceTIME"];
$ServiceID = $_POST["ServiceID"];
$PatientID = $_POST["PatientID"];
$DoctorID = $_POST["DoctorID"];
$DoctorNAME = $_POST["DoctorNAME"];
$TreatmentNAME = $_POST["TreatmentNAME"];

$ExitTime = $db->query("SELECT * FROM timing WHERE  serve_id ='$ServiceID'  AND patient_id = '$PatientID' AND  doctor_id = '$DoctorID'  AND time = '$ServiceTIME' AND DoctorName = '$DoctorNAME' AND day = '$ServiceDAY'  AND treatment = '$TreatmentNAME'  ");
$CountTime = $ExitTime->num_rows;

if($CountTime != 0){
    echo"its ful";

$_SESSION["DONT_HAVE_TIME"] = 'this time is already ful !';
header("location: ./PatientPortalController.php");

}else{
    echo"its null";
$db->query("INSERT INTO timing(serve_id,patient_id,doctor_id,time,DoctorName,day,treatment) VALUE('$ServiceID', '$PatientID' , '$DoctorID' , '$ServiceTIME' , '$DoctorNAME' ,'$ServiceDAY','$TreatmentNAME' )");


}




header("location: ./PatientPortalController.php");


?>
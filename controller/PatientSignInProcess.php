<?php

include"../model/database.php";

session_start();

$Username = $_POST["Username"];
$password = $_POST["password"];

$hashedPassword = md5($password); 

$userCountpassword = $db->query("SELECT * FROM patients WHERE  Patients_password = '$hashedPassword' ");
$countPass = $userCountpassword->num_rows;

$userCountName = $db->query("SELECT * FROM patients WHERE Patients_user = '$Username'   ");
$CountUser = $userCountName->num_rows; 





$_SESSION["Login_status"] = false;

if ($CountUser != 0 && $countPass != 0 ){
echo"was success";
$result = $userCountName->fetch_assoc();

    $_SESSION["USER_ID"] = $result["id"];
    $_SESSION["Login_status_pat"] = true;
    $_SESSION["success_ful"] = "login was successful !";
header("location: ./PatientPortalController.php");

}else{

    $_SESSION["Login_status"] = false;
if ($CountUser === 0  ){
    $_SESSION["password_error"] = "Password Is not found !";
    $_SESSION["username_error"] = "Username is not found !";
echo"not success";


header("location: ./SignInpatients.php");



}


}





?>
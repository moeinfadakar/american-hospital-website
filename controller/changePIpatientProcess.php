<?php 

include"../model/database.php";

session_start();

$Karbar = $_POST["Karbar"];
$name = $_POST["name"];
$username = $_POST["username"];
$newPassword = $_POST["newPassword"];
$RepeatNewPassword = $_POST["RepeatNewPassword"];
$Age = $_POST["Age"];
$Number = $_POST["Number"];
$Gender = $_POST["Gender"];

if($newPassword === $RepeatNewPassword){

if (strlen($username) < 4 || strlen($newPassword) <= 8 ){

//first step : hash the users password

    $SecuredPassword = md5($newPassword);

//second step : update there personal information`s (PI) user 

$updateUserInformation = $db->query("UPDATE  patients  SET  Name='$name' ,Patients_user = '$username' , Patients_password = '$SecuredPassword' , Number='$Number' ,  Age = '$Age' , Gender='$Gender' WHERE id = '$Karbar' ");


// step 3 : get back to the patient portal and tell to user That Update was successful !

header("location: .\PatientPortalController.php");

}else{


// if Characters in username  and password  were`nt enough show this message  

    $_SESSION["NotEnoughCharacter"] = "password most be at least <b>8 character </b> and username most be at least <b>4 character</b> !!!!";
    header("location: .\PatientPortalController.php");

}

}else{

$_SESSION["NotMatchPassword"] = "Password are not MATCH !";
header("location: .\PatientPortalController.php");

}









?>
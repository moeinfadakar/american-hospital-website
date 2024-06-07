<?php

include"../model/database.php";

session_start();

$ID = $_POST["ID"];
$name = $_POST["name"];
$username = $_POST["username"];
$newPassword = $_POST["newPassword"];
$RepeatNewPassword = $_POST["RepeatNewPassword"];
$Age = $_POST["Age"];
$Number = $_POST["Number"];
$Gender = $_POST["Gender"];

if($newPassword === $RepeatNewPassword){

if (strlen($newPassword) < 8 || strlen($username) < 4  ){

    echo"character";
    $_SESSION["PASSWORD_ARE_NOT_MATCH"] = 'password must be at least 9 character and username must be at least 5 character';
    header("location: .\DoctorPortalController.php");
}else{

echo"update";

$secured_password = md5($newPassword);
$UpdateSide = $db->query("UPDATE  doctors SET  Name='$name' , Username = '$username' , password = '$secured_password' , Number='$Number' ,  Age = '$Age' , Gender='$Gender' WHERE id = $ID ");
header("location: .\DoctorPortalController.php");
}


}else{
   echo"match";
    $_SESSION["PASSWORD_ARE_NOT_MATCH"] = 'passwords are not the same !';

    header("location: .\DoctorPortalController.php");
    
}







?>
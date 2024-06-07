<?php

require"../model/database.php";

session_start();

$PATIENT_NAME = $_POST["PATIENT_NAME"];
$USERNAME_PATIENT = $_POST["USERNAME_PATIENT"];
$PASSWORD_PATIENT = $_POST["PASSWORD_PATIENT"];
$NUMBER_PATIENT = $_POST["NUMBER_PATIENT"];
$AGE_PATIENT = $_POST["AGE_PATIENT"];
$GENDER_PATIENT = $_POST["GENDER_PATIENT"];



$secured_password = md5($PASSWORD_PATIENT);

$CheckUsername =$db->query("SELECT * FROM patients WHERE  Patients_user = '$USERNAME_PATIENT' AND Patients_password = '$secured_password' ");
$num_user = $CheckUsername->num_rows;

// check for username if its uniq it can be there


if ($num_user === 0 ){

    if (strlen($secured_password) < 8 || strlen($USERNAME_PATIENT) < 4 ){

echo"characters are not important";

     $_SESSION["Character_error_doctor"] ='password must be more than 8 character and username must be between 5-11 ';
     header("location: controller\SignUpPatient.php");

     
     }else{
          
        //if username is uniq and have enough length , then we insert it to the database  

echo"insert";

     $insertBox = $db->query("INSERT INTO patients(name,Patients_user,Patients_password,Number,Age,Gender) VALUE('$PATIENT_NAME','$USERNAME_PATIENT','$secured_password','$NUMBER_PATIENT','$AGE_PATIENT','$GENDER_PATIENT' )");

    $_SESSION["success_doctor_patients_register"] = 'Sign up was Successful !' ;
header("location: ./SignInpatients.php ");

    }
    

}else{

echo'expired username';

$_SESSION["username_doctor_exit"] = 'Username is used before !' ;
header("location: controller\SignUpPatient.php");
}






?>
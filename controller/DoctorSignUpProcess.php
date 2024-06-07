<?php 

include"../model/database.php";

session_start();

$name = $_POST["name"];
$specialty = $_POST["specialty"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Number = $_POST["Number"];
$Age = $_POST["Age"];
$btnradio = $_POST["btnradio"];

$hashedPassword = md5($Password);

$CheckUsername =$db->query("SELECT * FROM doctors WHERE  Username = '$Username' AND password = '$hashedPassword' ");
$num_user = $CheckUsername->num_rows;

// check for username if its uniq it can be there

if ($num_user === 0 ){

    // check for the length of username and password 
    
    if (strlen($hashedPassword) <= 8 || strlen($Username) <= 5 ){

     $_SESSION["Character_error_doctor"] ='password must be more than 8 character and username must be more than 5 ';
     header("location: ./SignUpDoctor.php");

     }else{
           
        //if username is uniq and have enough length , then we insert it to the database  

     $insertBox = $db->query("INSERT INTO doctors(name,specialty,Username,password,Age,Number) VALUE('$name','$specialty','$Username','$hashedPassword','$Age','$Number' )");

    $_SESSION["success_doctor_patients_register"] = ' registration was Successful !' ;

    header("location: ./signindoctor.php");

    }
    

}else{

$_SESSION["username_doctor_exit"] = 'Username is used before !' ;

header("location: ./SignUpDoctor.php");

}
?>
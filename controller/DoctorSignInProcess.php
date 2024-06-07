<?php

include"../model/database.php";

session_start();

$Username = $_POST["Username"];
$password = $_POST["password"];

$hashedPassword = md5($password);

$userName = $db->query("SELECT * FROM doctors WHERE  Username = '$Username' AND password= '$hashedPassword' "); 
$usersCounts = $userName->num_rows;



$_SESSION["Login_status"] = false;

if ($usersCounts != 0 ){

echo"vorord";

    $_SESSION["Login_status_doc"] = true;
    $TheUserId  = $userName->fetch_assoc();
   $_SESSION["D_id"] = $TheUserId["id"];
   $_SESSION["success_ful"] = "login was successfull !";

header("location: .\DoctorPortalController.php");

}else{

    $_SESSION["Login_status"] = false;

if ($usersCounts === 0){
    $_SESSION["username_error"] = "Username is not found !";
    header("location: ../controller\SignIn.php");
echo"username or password";
}




}

?>
<?php
  
session_start();

    $request = $_SERVER["REQUEST_URI"];
   $request =str_replace("/hospital" , "" , $request);

    switch ($request)
    {

      case("/"):
      case("/home"):
      case("/index"):
      case("/first"):
      case("/controlpanel"):
      case("/enter"):
require "./view/Home.php";
break;


      case("vorord"):
      case("/signin"):
      case("/sign"):
      case("/userlogin"):
      case("/pass"):
      case("/enterside"):
require "./controller/SignIn.php";
break;

      case("///"):
      case("/loginkardan"):
      case("/sg"):
      case("/loginin"):
      case("/back"):
require "./controller/DoctorPortalController.php";
break;


      case("bimar"):
      case("/patients"):
      case("/panelp"):
      case("/bimarpanel"):
         if ( $_SESSION["Login_status_pat"] = true || $_SESSION["Login_status_pat"] = null ){
             require "./controller/PatientPortalController.php";
         }else{ 
            require "./controller/SignIn.php";
         }


break;

      case("/doc"):
      case("/doctorpanel"):
      case("/doctor"):
      case("/control"):
         if ( $_SESSION["Login_status_doc"] = true || $_SESSION["Login_status_doc"] = null){
             require "./controller/DoctorPortalController.php";
         }else{ 
            require "./controller/SignIn.php";
         }
break;



        default:
            require   "view/error404.php";
            break;
    }

?>
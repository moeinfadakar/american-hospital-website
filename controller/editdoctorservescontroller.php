<?php

include"../model/database.php";


$id =  $_GET["id"];


$serves = $db->query("SELECT * FROM servs WHERE id = $id");
$treatmentNAME = $serves->fetch_assoc();

require"../view/EditdoctorServeView.php";

?>

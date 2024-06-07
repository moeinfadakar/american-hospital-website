<?php 

include"../model/database.php";

$ID = $_GET["id"];

$db->query("DELETE FROM timing WHERE serve_id = '$ID' ");

header("location: ./PatientPortalController.php");

?>
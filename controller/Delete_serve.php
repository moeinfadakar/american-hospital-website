<?php


include"../model/database.php";

$id = $_GET["id"];


$db->query("DELETE  FROM servs WHERE id = '$id' ");


header("location:  ./DoctorPortalController.php");
?>
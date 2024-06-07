<?php

include"../model/database.php";


$ID = $_GET["id"];

echo $ID ; 

$DPIs = $db->query("SELECT * FROM doctors WHERE id = '$ID' ");

require "../view/ChangePersonalInformationsDoctor.php";






?>
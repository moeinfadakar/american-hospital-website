<?php


include"../model/database.php";

$ID = $_GET["id"];

$PIs = $db->query("SELECT * FROM patients WHERE id = $ID ");

require"../view/changePIpatient.php";





?>





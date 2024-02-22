<?php
include_once "../modele/DAOIntervention.php";


$testGetLI = getLesIntervention();
var_dump($testGetLI);
var_dump(getLesIntervention(1));
var_dump(getLesIntervention(2));
// here more
?>
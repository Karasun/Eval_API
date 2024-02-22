<?php

include_once '../global/config.php';
include_once '../'.CHEMIN_LIB.'pdo2.php';
include_once '../'.CHEMIN_MODELE.'DAOEtudiant.php';


//var_dump(getUnEtudiant(1));
//
//var_dump(addInterventionEtudiant(1, date("Y-m-d H:i:s")));

//var_dump(updateEtudiant(1,"VAN", "Julo"));
 
var_dump(addEtudiant("QUESQUE", "Séverine"));
?>

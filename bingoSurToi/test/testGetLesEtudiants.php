<?php
include_once "../modele/DAOEtudiantDT.php";


$testGetLE = getLesEtudiants();
var_dump($testGetLE);

$testGetUnEtudiantLS = getUnEtudiant(1);

$testAddEtudiantLS = addUnEtudiant('xavier', 'x');

$testUpdateEtudiantLS = updateUnEtudiant( 2, 'Louis', 'zerano');
?>
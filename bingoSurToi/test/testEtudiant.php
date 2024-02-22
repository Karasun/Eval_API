<?php
include_once '../entityDT/Etudiant.php';
$unEtu = new Etudiant();
echo $unEtu->donneNbInterventions()."\n";
$unEtu->addIntervention();
echo $unEtu->donneNbInterventions()."\n";
$unEtu->addIntervention();
echo $unEtu->donneNbInterventions()."\n";
<?php
include_once '../modeles/Etudiant.php';

$unEtu = new Etudiant();
echo $unEtu->donneNbInterventions()."\n";
$unEtu->addIntervention();
echo $unEtu->donneNbInterventions()."\n";
$unEtu->addIntervention();
echo $unEtu->donneNbInterventions()."\n";

?>
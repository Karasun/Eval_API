<?php

// include_once "../global/config.php";
 include_once "../libs/pdo2.php";
// include_once "../enityDT/ClassEtudiant.php";

function getLesIntervention($id) {
    $pdo = PDO2::getInstance();
    $requete = $pdo->prepare("SELECT date_intervention FROM Intervention WHERE id_etudiant=:id");
    $requete->bindValue(':id',$id);
    $requete->execute();
    $lesInterventions = $requete->fetchAll();
    $requete->closeCursor();
    return $lesInterventions;
}
function addInterventionEtudiant($id){
    $pdo = PDO2::getInstance();
    $requete = $pdo->prepare("INSERT INTO intervention VALUES (:id,now())");
    $requete->bindValue(':id',$id);
    $ok=$requete->execute();
}
?>
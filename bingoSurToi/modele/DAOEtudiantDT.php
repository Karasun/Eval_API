<?php

// include_once "../global/config.php";
 include_once "../libs/pdo2.php";
// include_once "../enityDT/ClassEtudiant.php";

function getLesEtudiants() {
    $pdo = PDO2::getInstance();
    $requete = $pdo->prepare("SELECT id, nom, prenom FROM Etudiant");
    $executionok = $requete->execute();
    return $executionok ? $requete->fetchAll(PDO::FETCH_ASSOC) : false;
}

function getUnEtudiant($id) {
    $pdo = PDO2::getInstance();
    $requete = $pdo->prepare("SELECT id, nom, prenom FROM Etudiant WHERE id = ?");
    $requete->binValue(':id', $id);
    $requete->execute();
    $unEtudiant = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $unEtudiant; 
}

function addUnEtudiant($nom, $prenom) {
    $pdo = PDO2::getInstance();
    $requete = $pdo->prepare("INSERT INTO Etudiant (id, nom, prenom) VALUES(:nom, :prenom;)");
    $requete->bindValue(':nom', $nom);
    $requete->bindValue(':prenom', $prenom);
    $ok->$requete->execute();
    $requete->closeCursor();
    return $ok;
}

function updateUnEtudiant($id, $nom, $prenom) {
    $pdo = PDO2::getInstance();
    
    $requete = $pdo->prepare("UPDATE Etudiant SET nom=:nom, prenom=:prenom WHERE id=:id ");
    $requete->bindValue(':id' ,$id);
    $requete->bindValue(':nom' ,$nom);
    $requete->bindValue(':prenom' ,$prenom);
    $requete->execute();
}

function deleteUnEtudiant($id) {
    $pdo = PDO2::getInstance();
    $requete = $pdo->prepare("DELETE FROM Etudiant WHERE id = ?");
    $requete->bindValue('id', $id);
    $requete->execute();
}

?>
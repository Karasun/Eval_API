<?php
include_once "../entityDT/ClassEtudiant.php";
include_once "../libs/pdo2.php";


$etudiant = new Etudiant("NomX", "PrenomX");
echo $etudiant->toString() ."<br>";
?>
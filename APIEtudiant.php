<?php

include_once("bingoSurToi/modele/DAOEtudiantDT.php");
include_once("bingoSurToi/global/config.php");
include_once("bingoSurToi/libs/pdo2.php");

$methode = $_SERVER["REQUEST_METHOD"];
switch ($methode) {
	case "GET":
		if (isset($_GET['id'])) {
			$unEtudiant = getUnEtudiant($id);
			echo json_encode($unEtudiant);
		} else {
			$lesEtudiants = getLesEtudiants();
			echo json_encode($lesEtudiants);
		}
		$token = null;
		// On vérifie si on reçoit un token
		if (isset($_SERVER['Authorization'])) {
			$token = trim($_SERVER['Authorization']);
		} elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) {
			$token = trim($_SERVER['HTTP_AUTHORIZATION']);
		} elseif (function_exists('apache_request_headers')) {
			$requestHeaders = apache_request_headers();
			if (isset($requestHeaders['Authorization'])) {
				$token = trim($requestHeaders['Authorization']);
			}
		}
		var_dump($token);
		break;
	case "POST":
		addUnEtudiant($_POST['nom'], $_POST['prenom']);
		echo "Validé";
		break;
	case "PUT":
		updateUnEtudiant($_PUT["nom"], $_PUT["prenom"], $_PUT["id"]);
		echo "PUT, on modifie le nom en mettant " . $_PUT['nom'] . " pour l'objet existant dont l'id est " . $_PUT['id'];
		break;
	case "DELETE":
		deleteUnEtudiant($_DELETE["id"]);
		echo "DELETE, on supprime l'objet existant dont l'id est " . $_DELETE['id'];
		break;
}

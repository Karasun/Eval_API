<?php

include_once("bingoSurToi/modele/DAOIntervention.php");
include_once("bingoSurToi/global/config.php");
include_once("bingoSurToi/libs/pdo2.php");

$methode=$_SERVER["REQUEST_METHOD"];
switch ($methode){
	case "GET":
	    if (isset($_GET['id'])){
			$unEtudiant = getUnEtudiant($id);
			echo json_encode($unEtudiant);
	    } else {
			$lesEtudiants = getLesEtudiants();
			echo json_encode($lesEtudiants);
	    }
	    break;
	case "POST":
		addUnEtudiant($_POST['nom'], $_POST['prenom']);
		echo "Validé";
	  break;
	  case "PUT":
		parse_str(file_get_contents('php://input'), $_PUT);
		try {
		addInterventionEtudiant($_PUT['id']);
		http_response_code(202);
		}
		catch (Exception $e){
		http_response_code(400);
		}
	  break; 
    	case "DELETE":
	  deleteUnEtudiant( $_DELETE["id"]);
      	  echo "DELETE, on supprime l'objet existant dont l'id est ".$_DELETE['id'];
	  break; 
	  	
}
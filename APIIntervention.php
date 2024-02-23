<?php

include_once("bingoSurToi/modele/DAOIntervention.php");
include_once("bingoSurToi/global/config.php");
include_once("bingoSurToi/libs/pdo2.php");

$methode = $_SERVER["REQUEST_METHOD"];
switch ($methode) {
	case "GET":
		if (isset($_GET['id'])) {
			print(json_encode(getLesIntervention($_GET['id'])));
		}
		break;
	case "PUT":
		parse_str(file_get_contents('php://input'), $_PUT);
		try {
			addInterventionEtudiant($_PUT['id']);
			http_response_code(202);
		} catch (Exception $e) {
			http_response_code(400);
		}
		break;
}

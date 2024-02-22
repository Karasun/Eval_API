<?php

class Section {
    public int $id; //PUBLIC et non PRIVATE pour la création des objets
    public $nom;
    public $niveau;

    //CHERCHER COMMENT ECRIRE ACCESSEUR POUR OBTENIR "PROPRIETE"
function getId() {
    return $this->id;
}

function getNiveau() {
    return $this->niveau;
}
function getNom() {
    return $this->nom;
}


}
?>

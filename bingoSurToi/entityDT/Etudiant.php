<?php

class Etudiant {
    public int $id;
    public $nom;
    public $prenom;
    public $lesInterventions = array(); 

    public function donneNbInterventions(){
        return count($this->lesInterventions);
    }
    public function addIntervention() {
        $this->lesInterventions[]=newDateTime();
    }

}
?>

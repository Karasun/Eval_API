<?php

Class Etudiant {
    public $id;
    public $nom;
    public $prenom;
    public $datetime;
    public $interv = array();

    public function __cosntruct($nom, $prenom, $id = null, $interv = null, $datetime = null) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getId() {
        return $this->id;
    }
     public function setId($id) {
        $this->id = $id;
     }
     public function getInterv() {
        return $this->interv;
     }
     public function setInterv($interv){
        $this->interv = $interv;
     }
     public function getDatetime() {
        return $this->datetime;
     }
     public function setDatetime($datetime){
        $this->datetime = $datetime;
     }
    public function toString() {
        return "Nom : {$this->nom},Prenom : {$this->prenom}";
    } 
}

?>
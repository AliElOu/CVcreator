<?php
class Personne {
    public $nom;
    public $prenom;
    public $date_naissance;

    public function __construct($nom, $prenom, $date_naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
    }

    public function presenter() {
        return "Je m'appelle {$this->nom} {$this->prenom}.";
    }

    public function age() {
        $date_naissance = new DateTime($this->date_naissance);
        $aujourd_hui = new DateTime('now');
        $difference = $date_naissance->diff($aujourd_hui);
        return $difference->y; 
    }
}
?>

<?php

class Titulaire{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private string $_ville;
    private array $_comptesBancaires;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
        $this->_ville = $ville;
        $this->_comptesBancaires = [];
    }

    public function get_Nom():string{
        return $this->_nom;
    }

    public function set_Nom(string $nom){
        $this->_nom = $nom;
    }

    public function get_Prenom():string{
        return $this->_prenom;
    }

    public function set_Prenom(string $prenom){
        $this->_prenom = $prenom;
    }

    public function get_DateNaissance():string{
        return $this->_dateNaissance;
    }

    public function set_DateNaissance(string $dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }

    public function get_Ville():string{
        return $this->_ville;
    }

    public function set_Ville(string $ville){
        $this->_ville = $ville;
    }

    public function get_ComptesBancaires():array{
        return $this->_comptesBancaires;
    }

    public function set_ComptesBancaires(array $comptesBancaires){
        $this->_comptesBancaires = $comptesBancaires;
    }

    public function add_Banque(CompteBancaire $compteBancaire){
        $this->_comptesBancaires[] = $compteBancaire;
    }

    public function __toString():string{
        return $this->_nom." ".$this->_prenom;
    }
}
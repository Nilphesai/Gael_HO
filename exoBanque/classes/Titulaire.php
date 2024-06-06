<?php

class Titulaire{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private string $_ville;
    private array $_comptesBanquaires;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
        $this->_ville = $ville;
        $this->_comptesBanquaires [];
    }
}
<?php

class Auteur{
    private string $_nom;
    private string $_prenom;
    private array $_livres;

    public function __construct(string $nom, string $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
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

    public function get_Livres():array{
        return $this->_livres;
    }

    public function set_Livres(array $livres){
        $this->_livres = $livres;
    }

    public function add_Livre(Livre $livre){
        $this->_livres[] = $livre;
    }

    public function __tostring():string{
        return $this->_prenom." ".$this->_nom;
    }
}
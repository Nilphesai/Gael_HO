<?php

class CompteBanquaire{
    private string $_libelle;
    private int $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    public function __construct(string $libelle, int $solde, string $devise,Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
    }
}
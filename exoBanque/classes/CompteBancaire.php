<?php

class CompteBancaire{
    private string $_libelle;
    private int $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    public function __construct(string $libelle, int $solde, string $devise,Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->add_Banque($this);
    }

    public function get_Libelle():string{
        return $this->_libelle;
    }

    public function set_Libelle(string $libelle){
        $this->_libelle = $libelle;
    }

    public function get_Solde():int{
        return $this->_solde;
    }

    public function set_Solde(int $solde){
        $this->_solde = $solde;
    }

    public function get_Devise():string{
        return $this->_devise;
    }

    public function set_Devise(string $devise){
        $this->_devise = $devise;
    }

    public function get_Titulaire():Titulaire{
        return $this->_titulaire;
    }

    public function set_Titulaire(Titulaire $titulaire){
        $this->_titulaire = $titulaire;
    }

    public function __toString():string{
        return $this->_libelle." de ".$this->_titulaire;
    }

    public function Credit(int $credit){
        $this->_solde = $this->_solde + $credit;
    }

    public function Debit(int $debit){
        $this->_solde = $this->_solde - $debit;
    }

    public function Virement(int $argent,CompteBancaire $compteCredit){
        $compteCredit->Credit($argent);
        $this->Debit($argent);
    }
}
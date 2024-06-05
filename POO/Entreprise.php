<?php
class Entreprise {
    private string $_raisonSociale;
    private DateTime $_dateCreation;
    private string $_adresse;
    private string $_pc;
    private string $_ville;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville){
        $this->_raisonSocial = $raisonSociale;
        $this->_dateCreation = new DateTime($dateCreation);//on le transforme endateTime dans le constructeur
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
    }

    public function get_RaisonSocial(): string{
        return $this->_raisonsocial;
    }

    public function set_RaisonSocial(string $raisonSocial){
        $this->_raisonSocial = $raisonSocial;
    }

    public function get_DateCreation(): DateTime {
        return $this->_dateCreation;
    }

    public function set_DateCreation(DateTime $dateCreation){
        $this->_dateCreation = $dateCreation;
    }

    public function get_Adresse(): string{
        return $this->_adresse;
    }

    public function set_Adresse(string $adresse){
        $this->_adresse = $adresse;
    }

    public function get_Pc(): string{
        return $this->_pc;
    }

    public function set_Pc(string $pc){
        $this->_pc = $pc;
    }

    public function get_Ville(): string{
        return $this->_ville;
    }

    public function set_Ville(string $ville){
        $this->_ville = $ville;
    }

}
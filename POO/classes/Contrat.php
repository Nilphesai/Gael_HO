<?php

class Contrat {

    private Entreprise $_entreprise;
    private Employe $_employe;
    private DateTime $_dateEmbauche;
    private string $_typeContrat;

    public function __construct(Entreprise $entreprise,Employe $employe, string $dateEmbauche, string $typeContrat){
        $this->_entreprise = $entreprise;
        $this->_employe = $employe;
        $this->_dateEmbauche = new DateTime($dateEmbauche);
        $this->_typeContrat = $typeContrat;
        $this->_entreprise->add_Contrats($this);
        $this->_employe->add_Contrats($this);
    }

    public function get_Entreprise():Entreprise{
        return $this->_entreprise;
    }

    public function set_Entreprise(Entreprise $entreprise){
        $this->_entreprise = $entreprise;
    }

    public function get_Employe():Employe{
        return $this->_employe;
    }

    public function set_Employe(Employe $employe){
        $this->_employe = $employe;
    }

    public function get_DateEmbauche(){
        return $this->_dateEmbauche;
    }

    public function set_DateEmbauche(DateTime $dateEmbauche){
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function get_TypeContrat(){
        return $this->_typeContrat;
    }

    public function set_TypeContrat(string $typeContrat){
        $this->_typeContrat = $typeContrat;
    }
}
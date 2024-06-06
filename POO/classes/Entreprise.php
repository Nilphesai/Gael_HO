<?php
class Entreprise {
    private string $_raisonSociale;
    private DateTime $_dateCreation;
    private string $_adresse;
    private string $_cp;
    private string $_ville;
    private array $_contrats;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville){
        $this->_raisonSociale = $raisonSociale;
        $this->_dateCreation = new DateTime($dateCreation);//on le transforme endateTime dans le constructeur
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
        $this->_contrats = [];
    }

    public function get_RaisonSociale(): string{
        return $this->_raisonSociale;
    }

    public function set_RaisonSociale(string $raisonSociale){
        $this->_raisonSociale = $raisonSociale;
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

    public function get_Cp(): string{
        return $this->_cp;
    }

    public function set_Cp(string $cp){
        $this->_cp = $cp;
    }

    public function get_Ville(): string{
        return $this->_ville;
    }

    public function set_Ville(string $ville){
        $this->_ville = $ville;
    }

    public function get_Contrats(): array{
        return $this->_contrats;
    }

    public function set_Contrats(array $contrats){
        $this->_contrats = $contrats;
    }

    public function add_Contrats(Contrat $contrat){
        $this->_contrats[] = $contrat;
    }

    public function get_AdresseComplete(): string{
        return $this->_adresse." ".$this->_cp." ".$this->_ville;
    }

    public function getInfos(): string{
        return $this." a été crée le ".
        $this->get_DateCreation()->format("d.m.Y")." et se situe à l'adresse suivante ".
        $this->get_AdresseComplete()."</br>";
    }

    public function afficherEmployes(){
        $result = "<h2>Employés de $this</h2>";
        
        foreach($this->_contrats as $contrat){
            $result .= $contrat->get_Employe()." (".$contrat->get_DateEmbauche()->format("d.m.Y").") en ".$contrat->get_TypeContrat()."</br>";
        }

        return $result;

    }

    public function __toString(): string{
        return $this->_raisonSociale;
    }

}
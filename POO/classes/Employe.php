<?php
class Employe{

    private string $_nom;
    private string $_prenom;
    private string $_email;
    private array $_contrats;

    public function __construct(string $nom, string $prenom, string $email){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_contrats = [];
    }

    public function get_Nom():string{
        return $this->_nom;
    }

    public function set_Nom($nom){
        $this->_nom = $nom;
    }

    public function get_Prenom():string{
        return $this->_prenom;
    }

    public function set_Prenom($prenom){
        $this->_prenom = $prenom;
    }

    public function get_Email():string{
        return $this->_email;
    }

    public function set_Email($email){
        $this->_email = $email;
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

    public function afficherEntreprise(){
        $result = "<h2>Entreprise de $this</h2>";
        
        foreach($this->_contrats as $contrat){
            $result .= $contrat->get_Entreprise()." (".$contrat->get_DateEmbauche()->format("d.m.Y").") en ".$contrat->get_TypeContrat()."</br>";
        }

        return $result;

    }

    public function __toString(): string{
        return $this->_nom." ".$this->_prenom;
    }
}
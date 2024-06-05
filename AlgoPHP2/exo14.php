<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes :</p>

<p>Peugeot 408 : $v1 = new Voiture("Peugeot","408");</br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);</p>

<p>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :</br>
echo $v1->getInfos();</br>
echo $ve1->getInfos(); </p>

<h2>Résultat</h2>

<?php

class Voiture
{
    // déclaration d'une propriété
    private string $_marque = "";
    private string $_modèle = "";


    public function get_marque(): string{
        return $this->_marque;
    }

    public function get_modèle(): string {
        return $this->_modèle;
    }


    public function set_marque(string $marque){
        $this->_marque = $marque;
    }
    public function set_modèle(string $modèle){
        $this->_modèle = $modèle;
    }


    public function __construct(string $marque,string $modèle){
        $this->_marque = $marque;
        $this->_modèle = $modèle;
    }

    public function __toString(){
        $result = $this->_marque." ".$this->_modèle;
        return $result;
    }


    public function getInfos(): string{
        $result = "Info véhicule </br>
        Nom et modèle du véhicule :$this </br>";
        return $result;
    }
}

//classe qui hérite
Class VoitureElec extends Voiture{
    private int $_autonomie;

    public function get_autonomie(): string {
        return $this->_autonomie;
    }

    public function set_autonomie(string $autonomie){
        $this->_autonomie = $autonomie;
    }


    public function __construct(string $marque,string $modèle,int $autonomie){
        parent::__construct($marque, $modèle);//prends les paramètres du parent
        $this->_autonomie = $autonomie;
    }

    public function getInfos(): string{
        $result = "Info véhicule </br>
        Nom et modèle du véhicule :$this </br>
        durée d'autonomie de $this->_autonomie heures </br>";
        return $result;
    }
}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfos();
echo $ve1->getInfos();
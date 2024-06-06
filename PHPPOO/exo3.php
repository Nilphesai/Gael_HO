<h1>Exercice 3</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).</br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;</br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Résultat</h2>

<?php

class Personne{

    private string $_nom;
    private string $_prenom;
    private DateTime $_age;

    public function __construct($nom,$prenom,$age){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = new DateTime($age);
    }

    public function get_Nom(): string{
        return $this->_nom;
    }

    public function set_Nom(string $nom){
        $this->_nom = $nom;
    }

    public function get_Prenom(): string{
        return $this->_nom;
    }

    public function set_Prenom(string $prenom){
        $this->_prenom = $prenom;
    }

    public function get_Age(): DateTime{
        return $this->_age;
    }

    public function set_Age(DateTime $age){
        $this->_age = $age;
    }

    public function __toString(): string{
        return $this->_prenom." ".$this->_nom;
    }

    public function calculAge(DateTime $age){
        $annee= date_diff($age, date_create(date("Y-m-d")));
        return $annee;
    }

}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

echo $p1." a ".$p1->calculAge($p1->get_Age())->format('%Y')." ans</br>";
echo $p2." a ".$p2->calculAge($p2->get_Age())->format('%Y')." ans";
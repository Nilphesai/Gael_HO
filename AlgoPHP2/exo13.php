<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.</p>

<p>v1 ➔ "Peugeot","408",5</br>
v2 ➔ "Citroën","C4",3</p>

<p>Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. </p>

<h2>Résultat</h2>

<?php

class Voiture
{
    // déclaration d'une propriété
    public $_marque = "";
    public $_modèle = "";
    public $_nbPortes = 0;
    public $_vitesseActuelle = 0;

    public $_onOff = "à l'arrêt";

    //accesseurs
    public function get_marque(): string{
        return $this->_marque;
    }

    public function get_modèle(): string {
        return $this->_modèle;
    }

    public function get_nbPortes(): int {
        return $this->_nbPortes;
    }

    public function get_vitesseActuelle(): int {
        return $this->_vitesseActuelle;
    }
    
    //mutateurs
    public function set_marque(string $marque){
        $this->_marque = $marque;
    }
    public function set_modèle(string $modèle){
        $this->_modèle = $modèle;
    }
    public function set_nbPortes(int $nbPortes){
        $this->_nbPortes = $nbPortes;
    }
    public function set_vitesseActuelle(int $vitesseActuelle){
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    //constructeur
    public function __construct($marque,$modèle,$nbPortes){
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $nbPortes;
    }

    // déclaration des méthodes
    public function demarrer(): string {
        
        if ($this->$_onOff == "démarré"){
            $result = " le véhicule $this->_marque $this->modèle à déja démarré</br>";
        }
        else {
            $this->_onOff = "démarré";
            $result = "le véhicule $this->_marque $this->modèle démarre</br>";
        }
        
        return $result;
    }

    public function accelerer($vitesse): string {
        if ($this->_onOff == "démarré"){
            $this->_vitesseActuelle += $vitesse;
            $result = "Le véhicule $this->_marque $this->modèle accélère de $vitesse km / h</br>";
        }
        else {
            $result = "le véhicule $this->_marque $this->modèle veux accélerer de $vitesse km / h</br>";
            $result .= "Pour accélerer, il faut démarrer le Véhicule $this->_marque $this->modèle !</br>";
        }
        return $result;
    }

    public function stopper(): string {
        if ($this->_onOff == "démarré"){
            $this->_onOff = "à l'arrêt";
            $result = " le véhicule $this->_marque $this->modèle est stoppé</br>";
        }
        else {
            $result = "le véhicule $this->_marque $this->modèle est déjà à l'arrêt</br>";
        }
        return $result;
    }

    public function ralentir($vitesse){
        if ($this->_onOff == "démarré" and $this->_vitesseActuelle >= 0){
            $this->_vitesseActuelle -= $vitesse;
            $result = "Le véhicule $this->_marque $this->modèle ralentit de $vitesse km / h</br>";
        }
        else {
            $result = "le véhicule $this->_marque $this->modèle veux ralentir de $vitesse km / h</br>";
            $result .= "Pour ralentir, il faut démarrer le Véhicule $this->_marque $this->modèle !</br>";
        }
        return $result;
    }
    

    public function info(): string {
        
        $result = "Info véhicule </br>
        ********************</br>
        Nom et modèle du véhicule :$this->_marque $this->_modèle </br>
        Nombre de portes :$this->_nbPortes</br>
        Le véhicule $this->_marque est $this->_onOff </br>
        Sa vitesse actuelle est de : $this->_vitesseActuelle km / h</br>";
        return $result;
    }
}

$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);

echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->ralentir(10);
echo $v2->ralentir(10);
echo "La vitesse du véicule Peugeot 408 est de : ".$v1->get_vitesseActuelle()." km/h</br>";
echo "La vitesse du véicule Citroën C4 est de : ".$v2->get_vitesseActuelle()." km/h</br>";

echo $v1->info();
echo $v2->info();

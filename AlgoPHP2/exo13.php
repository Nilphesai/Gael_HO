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

    public $_onOff = TRUE;

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
    public function demarrer() {
        if ($this->$_onOff == TRUE){
            echo " le véhicule $this->$_marque $this->modèle à déja démarré</br>";
        }
        else {
            $this->$_onOff = TRUE;
            echo "le véhicule $this->$_marque $this->modèle démarre</br>";
        }
    }

    public function accelerer($vitesse) {
        if ($_vitesseActuelle <= 0){
            $this->$_vitesseActuelle += $vitesse;

        }
        else {
            echo "le véhicule $this->$_marque $this->modèle veux accélerer de $vitesse </br>";
            echo "Pour accélerer, il faut démarrer le Véhicule $this->$_marque $this->modèle !</br>";
        }
        
    }

    public function stopper() {
        if ($this->$_onOff == TRUE){
            $this->$_onOff = FALSE;
            echo " le véhicule $this->$_marque $this->modèle est stoppé</br>";
        }
        else {
            echo "le véhicule $this->$_marque $this->modèle est déjà à l'arrêt</br>";
        }
    }

    public function info(): string {
        echo $this->_marque;
        $result = "Info véhicule </br>********************</br>Nom et modèle du véhicule :$this->_marque $this->_modèle </br>Nombre de portes :$this->_nbPortes</br>Le véhicule $this->_marque est $this->_onOff </br>Sa vitesse actuelle est de : $this->_vitesseActuelle km / h</br>";
        return $result;
    }
}

$v1 = new Voiture("Peugeot","408",5);

echo $v1->get_marque();
$v2 = new Voiture("Citroën","C4",3);
echo $v2->get_marque();
echo $v1->info();

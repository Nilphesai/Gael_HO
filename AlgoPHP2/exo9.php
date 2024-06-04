<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>

<?php


$nomsRadio = array("Monsieur","Madame","Mademoiselle");
//afficher le résultat de la fonction alimenterListeDeroulante
echo AfficherRadio($nomsRadio);


function AfficherRadio($nomsRadio) {
    foreach ($nomsRadio as $nomsRadio){//le "name" est là pour liée les radiobutton entre eux
        $result .= "<input type='radio' id='$nomsRadio' name='genre'/>
        <label for='$nomsRadio'>$nomsRadio</label></br>";
    }
    return $result;
}
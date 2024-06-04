<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</p>

<h2>Résultat</h2>

<?php


//afficher le résultat de la fonction
echo formaterDateFr("2018-02-23");

function formaterDateFr($date) {
    //strtotime récupère le timestamp
    //getdate l'utilise pour transformé la date en tableau
    $tabdate = getdate(strtotime($date));
    $semaine = array(1=>" Lundi "," Mardi "," Mercredi "," Jeudi ",
    " vendredi "," samedi "," Dimanche ");
    $mois =array(1=>" janvier "," février "," mars "," avril "," mai "," juin ",
    " juillet "," août "," septembre "," octobre "," novembre "," décembre ");
    //récupère jour de ma semaine, jour du mois, mois de l'année et année
    $result = $semaine[$tabdate['wday']].$tabdate['mday'].$mois[$tabdate['mon']].$tabdate['year'].' ';

    return $result;
}
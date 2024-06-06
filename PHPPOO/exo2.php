<h1>Exercice 2</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</p>

<h2>Résultat</h2>

<?php


function formaterDateFr($date):string {
    $result = new DateTime($date);
    $fmt = new IntlDateFormatter(//classe d'affichage de d'ate et heure
        'fr_FR',//local
        IntlDateFormatter::FULL,//type de date
        IntlDateFormatter::NONE,//type d'heure
        NULL,//fuseau horaires (optionnel)
        IntlDateFormatter::GREGORIAN,);//calendrier utilisé (optionnel)
    $result = $fmt->format($result);
    
    return $result;
}

echo formaterDateFR("2018-02-23");
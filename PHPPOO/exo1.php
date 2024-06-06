<h1>Exercice 1</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

$naissance = "17-01-1985";
$aujourdhui = date("Y-m-d");

$diff = date_diff(date_create($naissance), date_create($aujourdhui));

echo "Age de la personne : ".$diff->format('%y')." ans ".$diff->format('%m')." mois et ".$diff->format('%d')." jour(s)";
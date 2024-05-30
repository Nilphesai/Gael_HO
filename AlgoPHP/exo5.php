<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$francs = 100;
$res = 0;
/*pour 100F faisant 15,24€ 1F = 0.1524*/

$res = round($francs * 0.1524,2);

echo "montant en francs : $francs </br>";
echo "$francs francs = $res €";
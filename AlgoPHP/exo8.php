<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre</p>

<h2>Résultat</h2>

<?php

$x=8;

echo "Table de $x : </br>";

for ($i=0;$i<=10;$i++) {
    $res = $i * $x;
    echo "$i * $x = $res </br>";
}

echo "</br> Table de $x (version 2) : </br>";

$j = 0;
while ($j <= 10) {
    $res = $j * $x;
    echo "$j * $x = $res </br>";
    $j++;
}
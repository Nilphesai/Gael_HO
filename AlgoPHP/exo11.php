<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php

$marques = Array(
    'Peugeot',
    'Renault',
    'BMW',
    'Mercedes',
);
$nbMarques = count($marques);

echo "Il y a actuellement $nbMarques marques de voitures dans le tableau :\n";
foreach ($marques as $marques) {
    echo "<li>$marques</li>";
}
<h1>Exercice 5</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$prix = 9.99;
$quantite = 5;
$TVA = 0.2;

$res = $prix * $quantite;
$res = $res + ($res * $TVA);

echo "Prix unitaire de l'article : $prix €</br>";
echo "Quantité = $quantite </br>";
echo "Taux de TVA : $TVA </br>";
echo "Le montant de la facture à régler est de : $res €";
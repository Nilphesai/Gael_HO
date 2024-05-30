<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.</p>

<h2>Résultat</h2>

<?php
$prix = 152;
$versement = 200;
$dix = 0;
$cinq = 0;
$deux = 0;
$un = 0;


$reste = $prix - $versement;

if ($reste > 0){
    echo "Il manque de l'argents !!!";
}
else {
    
    $reste = abs($reste);
    
    while ($reste > 10){
        $dix  = $dix+1;
        $reste = $reste - 10;
        echo "$reste";
        
    }
    while ($reste > 5){
        $cinq = $cinq+1;
        $reste = $reste - 5;
    }
    while ($reste > 2){
        $deux = $deux+1;
        $reste = $reste - 2;
    }
    if ($reste = 1){
        $un = $un+1;
        $reste = $reste -1;
    }

    echo "Montant à payer : $prix €</br>";
    echo "Montant versé : $versement €</br>";
    echo "Reste à payer : $reste €</br>";
    echo "***************************************************</br>";
    echo "Rendu monnaie :</br>";
    echo "$dix billets de 10 € - $cinq billets de 5 € - $deux pièce de 2 € - $un pièce de 1 €";

}


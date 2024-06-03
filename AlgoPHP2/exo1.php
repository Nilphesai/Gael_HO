<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.</p>

<h2>Résultat</h2>

<style>
    .red {
        color: red;
    }
</style>

<?php

$texte = "Mon texte en paramètre";

//afficher le résultat de la fonction convertirMajRouge
echo convertirMajRouge($texte);
echo convertirMajRouge2($texte);

echo convertirMajColor($texte, "blue");

function convertirMajRouge($texte) {
    $result = mb_strtoupper($texte); //convertir en majuscule
    $result = "<p class = 'red'>" . $result . "</p>";//modofier la couleur en appelmant la classe CSS 'red'
    return $result; // renvoie le résultat
}

//exemple en 1 ligne
function convertirMajRouge2($texte){
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}

function convertirMajColor($texte, $color){
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";

}
<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
$mots = 0;

if ($nbCaracteres != 0){
    $mots = 1;
    for ($i = 0; $i <= $nbCaracteres; $i++) {
        if ($phrase[$i] == " "){
            $mots++;
        }
        
    }
}


echo "La phrase $phrase contient $mots mots";
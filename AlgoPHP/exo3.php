<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
$test = "";
$test2 = "";
$coupe = 0;
echo " $phrase </br>";

for ($i = 0; $i <= $nbCaracteres; $i++) {
    if ($phrase[$i] != " " || $i == $nbCaracteres){
        $test = $test . $phrase[$i];
    }
    else{
        
        $coupe = $i;
        if ($test == "aujourd'hui"){
            
            $phrase = substr_replace($phrase, 'demain',$coupe,$i);
        }
        else{
            $test = "";
        }
    }
     
}
if ($test == "aujourd'hui"){
    $phrase = substr_replace($phrase, 'demain',$coupe,$i);
}
echo "$phrase ";
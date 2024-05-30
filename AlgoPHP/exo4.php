<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$palindrome = TRUE;
$j = -1;
$remplace = strtolower(str_replace(' ', '', $phrase));
$nbCaracteres = strlen($remplace);

for ($i = 0; $i <= $nbCaracteres; $i++) {
    if ($remplace[$i] == $remplace[$j]){
        $j = $j-1;
    }
    else {
        $palindrome = FALSE;
        break;
    }
}

if ($palindrome == TRUE){
    echo "La phrase $phrase est palindrome";
}
else{
    echo "la phrase $phrase n'est pas palindrome";
}
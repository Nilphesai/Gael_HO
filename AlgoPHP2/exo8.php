<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

//afficher le résultat de la fonction 
echo repeterImage($url,4);

function repeterImage($url,$N) {
    for ($i = 0; $i <= $N; $i ++){
        $result .= "<img src='"."$url"."' alt='image'/>";
    }
    return $result;
}
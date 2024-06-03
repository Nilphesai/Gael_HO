<h1>Exercice 11</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<h2>Résultat</h2>

<?php

$langue = Array(
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
);

$clé = key($langue);

for ($i = 1; $i <= count($langue);$i++){
    $clé = key($langue);
    Switch ($langue[$clé]){
        case "FRA":
            echo "Bonjour $clé</br>";
            Break;
        case "ESP":
            echo" Hola $clé</br>";
            Break;
        case "ENG":
            echo "Hello $clé</br>";
            Break;
    }
    next($langue);
}


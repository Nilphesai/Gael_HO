<h1>Livres</h1>

<?php

spl_autoload_register(
    function ($class_name){
    require 'classes/'. $class_name . '.php';
    }
);

$StephenKing = new Auteur("King","Stephen");
$L1 = new Livre("Ca",1138,1986,20,$StephenKing);
$L2 = new Livre("Simetierre",374,1983,15,$StephenKing);
$L3 = new Livre("Le Fléau",823,1978,14,$StephenKing);
$L4 = new Livre("Shining",447,1977,16,$StephenKing);

function afficherBibliographie($name):string {
    $result = "<h3> Livres de ".$name."</h3></br>";
    foreach($name->get_Livres() as $livre){
        $result .= $livre." : ".
        $livre->get_NbPages()." pages / ".
        $livre->get_Prix()." $</br>";
    }
    return $result;
}

echo afficherBibliographie($StephenKing);
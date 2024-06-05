<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.</p>

<h2>Résultat</h2>

<?php


$elements = array("Monsieur","Madame","Mademoiselle");
//afficher le résultat de la fonction alimenterListeDeroulante
echo alimenterListeDeroulante($elements);


function alimenterListeDeroulante($elements) {
    $result .= "<select>";
    foreach ($elements as $element){
        $result = "$result<option value='$element' name='$element'>$element</option>";
    }
    $result .= "</select>";
    return $result;
}
<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php


$elements = array(
    "Choix 1" => FALSE,
    "Choix 2" => TRUE,
    "Choix 3" => FALSE);
//afficher le résultat de la fonction 
echo genererCheckbox($elements);

function genererCheckbox($elements) {
    foreach ($elements as $choix => $bool){
        if ($bool == TRUE){
            $check = "checked";
        }
        else{
            $check = "unchecked";
        }
        $result .= "<input type='checkbox' id=$choix $check >
        <label for=$choix>$choix</label><br>";
    }
    return $result;
}
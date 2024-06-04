<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php


$nomsInput = array("Nom","Prénom","Ville");

//afficher le résultat de la fonction afficherInput
echo afficherInput($nomsInput);


function afficherInput($nomsInput) {

    foreach ($nomsInput as $nomsInput){
        $result .= "<label for=$nomsImput>$nomsInput</label></br>
                    <input type='text' id=$nomsImput"."></br>";
    }

    return $result;
}
<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</p>

<h2>Résultat</h2>

<?php


$nomsInput = array("Nom","Prénom","Ville", "adresse mail");
$nomsRadio = array("Masculin","Féminin","Autre");
$elements = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");

echo afficherFormulaire($nomsInput,$nomsRadio,$elements);
echo "</br><button class='favorite styled' type='button'>Submit</button>";

function afficherInput($nomsInput) {

    foreach ($nomsInput as $nomsInput){
        $result = "$result"."$nomsInput </br>
                    <input type='text'"."></br>";
    }

    return $result;
}

function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $nomsRadio){//le "name" est là pour liée les radiobutton entre eux
        $result .= "<input type='radio' id='$nomsRadio' name='genre'/>
        <label for='$nomsRadio'>$nomsRadio</label></br>";
    }
    return $result;
}

function alimenterListeDeroulante($elements) {
    $result .= "<select>";
    foreach ($elements as $elements){
        $result .= "<option value='$elements' name='$elements'>$elements</option>";
    }
    $result .= "</select>";
    return $result;
}

function afficherFormulaire($nomsInput,$nomsRadio,$elements){
    $result .= afficherInput($nomsInput);
    $result .= afficherRadio($nomsRadio);
    $result .= alimenterListeDeroulante($elements);
    return $result;
}
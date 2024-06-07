<h1>Banque</h1>

<?php

spl_autoload_register(
    function ($class_name){
    require 'classes/'. $class_name . '.php';
    }
);

$chris = new Titulaire("Dupont","Christophe","01/01/1985","Florence");
$creditMutuelle = new CompteBancaire("Compte courant",500,"euro",$chris);
$creditAgricole = new CompteBancaire("Livret A",500,"euro",$chris);

/* Test Virement
$creditMutuelle->virement("250",$creditAgricole);
echo $creditMutuelle->get_Solde()."</br>";
echo $creditAgricole->get_Solde();
*/



echo $chris;

function afficherTitulaire($name):string {
    $age = date_diff(date_create($name->get_DateNaissance()), date_create(date("Y-m-d")));
    $result = "<h3> Comptes de ".$name."</h3></br>";
    $result .= $age->format('%y')." ans </br> Habite à ".$name->get_Ville()."</br> Comptes Bancaires :</br>";
    foreach($name->get_ComptesBancaires() as $compte){
        $result .= $compte."</br>";
    }
    return $result;
}

function afficherCompteBancaire($banque):string{
    $result = "<h3>".$banque."</h3></br>";
    $result .= "soldes :".$banque->get_solde()." ".$banque->get_devise()."</br>";
    return $result;
}

echo afficherTitulaire($chris);
echo afficherCompteBancaire($creditMutuelle);
echo afficherCompteBancaire($creditAgricole);
<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php
$mail = "elan@elan-formation.fr";
$mail2 = "contact@elan";

function TestEmail($mail): String{
    if (!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $result = "L'adresse $mail est une adresse invalide </br>";
    }
    else{
        $result = "l'adresse $mail est une adresse e-mail valide</br>";
    }
    return $result;
}

echo TestEmail($mail);
echo TestEmail($mail2);


?>
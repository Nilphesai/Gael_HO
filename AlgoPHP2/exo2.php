<h1>Exercice 2</h1>

<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.</p>

<h2>Résultat</h2>

<?php

$capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome");

//afficher le résultat de la fonction cafficherTablesHTML
echo afficherTableHTML($capitales);


function afficherTableHTML($capitales) {
    ksort($capitales);
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
            <tbody>";

    foreach ($capitales as $pays => $capitale){
        $result = "$result"."<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
    }

    $result = "$result"."</tbody></table>";
    return $result;
}
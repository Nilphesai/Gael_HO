
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

<h2>Résultat</h2>

<?php

$age = 10;
$res = 0;


if (6 <=$age || $age <= 7 ){
    echo "l'enfant que a $age ans appartient à la catégorie << Poussin >>";
}
elseif (8 <= $age || $age <=9 ){
    echo "l'enfant que a $age ans appartient à la catégorie << Pulille >>";
}
elseif (10 <= $age || $age <= 11){
    echo "l'enfant que a $age ans appartient à la catégorie << Minime >>";
}
elseif ( $age >= 12){
    echo "l'enfant que a $age ans appartient à la catégorie << Caded >>";
}
else{
    echo "cette interface ne prends en compte qu'un age entre 6 et 12 ans inclu";

}
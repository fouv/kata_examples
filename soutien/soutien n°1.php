<?php

// O, 1,2,3 tableau indiciel
//tableau associatif avec des keys et des valeurs - openclassroom bases php tableaux
$prenoms = ['Florence', 'Ondine', 'Amor', 'Roxanne'];
echo $prenoms[1];
echo $prenoms[3];

foreach($prenoms as $prenom) {
    echo $prenom;
}

$prenoms[]="Julien";

var_dump($prenoms);
//boucle
echo "<ul>";
foreach($prenoms as $key =>$prenom){
    if($key != 2){ //if ($prenom != 'Amor' || $prenom !='Roxanne') || ou && = et   $prenom==='Roxanne'  strictement =
        echo "<li>" .$prenom. "</li>";
        echo "</ul>";
    }
}
// str quand les fonctions commencent par str  ce sont des chaines qui comptent les chaines de caractères
//if(strlen($prenom)>=5) { echo"<li> .$prenom. "</li>";

?>
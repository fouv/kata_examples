Objectif : trier les mots d'une phrase du plus court au plus long ou l'inverse.
En entrée : un phrase et un indicateur du sens de tri :

ASC : du plus petit au plus long
DESC : du plus long au plus petit
Exemple :

"il fait chaud", "ASC" => "il fait chaud"
"il fait chaud", "DESC" => "chaud fait il"

<?php
$string ="il fait chaud";
$newSentence = " ";
$words = explode(" ",$string);
$words = preg_replace('/[^a-z]+/',' ',$words);
foreach ($words as $word){
    $length = strlen[$word];
}
$newSentence = implode($length);
echo $newSentence;


